<?php

namespace Aesimpt\InAppMailing\Traits;

use DB;
use Auth; 
use Mail;
use App\User;
use Exception;
use Carbon\Carbon;
use Vinkla\Hashids\Facades\Hashids;
use Aesimpt\InAppMailing\Models\MessageThread;
use Aesimpt\InAppMailing\Controllers\Controller;
use Aesimpt\InAppMailing\Models\MessageUserThread;
use Aesimpt\InAppMailing\Models\MessageThreadMessage;

trait MessageThreadTrait
{

    /**
     * Store a newly created thread in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public static function createThread($receiver_email, $subject, $body, $do_mail = true)
    {
        $receiver     = User::where('email', $receiver_email)->first();
        $current_user = Auth::user();
        
        // return to create thread view if user email is not found.
        if( !$receiver ) { return response()->json(['status' => 'error', 'message' => 'User with email:'. $receiver_email .' is not found.']);  }

        try {

            DB::transaction( function() use ($current_user, $receiver, $subject, $body) {

                // create thread.
                $thread = new MessageThread;

                $thread->subject     = $subject;
                $thread->receiver_id = $receiver->id;
                $thread->sender_id   = $current_user->id;
                $thread->save();

                if( $receiver->id === $current_user->id ) {
                    // create user thread for sender only if sent to self.
                    $user_thread = new MessageUserThread;

                    $user_thread->message_thread_id = $thread->id;
                    $user_thread->user_id           = $current_user->id;
                    $user_thread->has_response      = 1;
                    $user_thread->save();

                } else {
                    // create user thread for both sender and receiver.
                    MessageUserThread::insert([
                        [
                            'message_thread_id' => $thread->id,
                            'user_id'           => $current_user->id,
                            'created_at'        => Carbon::now(),
                            'updated_at'        => Carbon::now(),
                            'is_read'           => 1,
                            'has_response'      => 0
                        ],
                        [
                            'message_thread_id' => $thread->id,
                            'user_id'           => $receiver->id,
                            'created_at'        => Carbon::now(),
                            'updated_at'        => Carbon::now(),
                            'is_read'           => 0,
                            'has_response'      => 1
                        ]
                    ]);
                }

                // create thread's first message.
                $message = new MessageThreadMessage;

                $message->message_thread_id = $thread->id;
                $message->sender_id         = $current_user->id;
                $message->body              = $body;
                $message->save();
            });

        } catch (Exception $error) {
            die($error);
            return response()->json(['status' => 'error', 'message' => 'Message sending failed']);
        }

        if( $do_mail ) {

            Mail::send('appmail::email-templates.email-notification', ['title' => $subject, 'content' => $body], function ($message) use($current_user)
            {
                $message->from($current_user->email, $current_user->name);
                $message->to('8e5900a443-bf2327@inbox.mailtrap.io');
            });            
        }

        return response()->json(['status' => 'success', 'message' => 'Message successfully sent!']);
    }

    /**
     * Get all messages from a thread.
     * 
     * @param  object $thread 
     * @return array
     */
    public static function getThreadMessages($thread)
    {
        $user_thread = MessageUserThread::where('message_thread_id', $thread->id)->where('user_id', Auth::user()->id)->first();
        $user_thread->is_read = 1;
        $user_thread->save();

        $messages_arr = [];

        foreach ($thread->messages as $message) {
            $messages_arr[] = (object) [
                'id'       => $message->id,
                'sender'   => (object) [
                    'id'   => $message->sender->id,
                    'name' => $message->sender->name
                ],
                'excerpt'  => excerpt($message->body, 80, '...'),
                'body'     => $message->body,
                'created'  => $message->created_at
            ];
        }

        $data = (object) [
            'thread_id' => $thread->id,
            'subject'   => $thread->subject,
            'sender'    => (object) [
                'id'    => $thread->sender->id,
                'name'  => $thread->sender->name
            ],
            'messages'  => $messages_arr,
        ];

        return $data;
    }

}