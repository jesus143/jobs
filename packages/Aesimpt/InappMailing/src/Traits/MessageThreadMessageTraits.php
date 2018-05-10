<?php

namespace Aesimpt\InAppMailing\Traits;

use DB;
use Auth; 
use Mail;
use App\User;
use Exception;
use Vinkla\Hashids\Facades\Hashids;
use Aesimpt\InAppMailing\Controllers\Controller;
use Aesimpt\InAppMailing\Models\MessageThread;
use Aesimpt\InAppMailing\Models\MessageUserThread;
use Aesimpt\InAppMailing\Models\MessageThreadMessage;

trait MessageThreadMessageTraits
{

    /**
     * Store a newly created message from a thread in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function createMessage($thread, $body, $do_mail = true)
    {
        $current_user = Auth::user();
        $receiver_id  = ($thread->sender_id == $current_user->id)? $thread->receiver_id : $thread->sender_id;

        try {

            DB::transaction( function() use ($thread, $receiver_id, $current_user, $body) {

                // create thread message.
                $message = new MessageThreadMessage;

                $message->message_thread_id = $thread->id;
                $message->sender_id = $current_user->id;
                $message->body = $body;
                $message->save();

                // update the receiver's thread is_read to 0.
                $user_thread = new MessageUserThread;

                $reply  = $user_thread::where('message_thread_id', $thread->id)->where('user_id', $receiver_id)->first();
                $reply->has_response = 1;
                $reply->is_read = 0;
                $reply->status = 1;
                $reply->save();
            });

        } catch (Exception $error) {
       
            return response()->json(['status' => 'error', 'message' => 'Message sending failed']);
        }

        if( $do_mail ) {

            Mail::send('appmail::email-templates.email-notification', ['body' => $body], function ($message) use ($current_user)
            {
                $message->from($current_user->email, $current_user->name);
                $message->to('8e5900a443-bf2327@inbox.mailtrap.io');
            });    
        }

        return $thread->id;
    }

}