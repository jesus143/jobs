<?php

namespace Aesimpt\InAppMailing\Traits;

use DB;
use Auth; 
use App\User;
use Exception;
use Vinkla\Hashids\Facades\Hashids;
use Aesimpt\InAppMailing\Models\MessageThread;
use Aesimpt\InAppMailing\Controllers\Controller;
use Aesimpt\InAppMailing\Models\MessageUserThread;
use Aesimpt\InAppMailing\Models\MessageThreadMessage;

trait MessageUserThreadTrait
{
    /**
     * Store user threads to storage.
     * 
     * @param  int $thread_id 
     * @param  int $user_id 
     * @return int
     */
	public static function createUserThread($thread_id, $user_id)
	{

        $user_thread = new MessageUserThread;

        $user_thread->message_thread_id = $thread_id;
        $user_thread->user_id = $user_id;
        $user_thread->save();

        return $user_thread->id;
	}

    /**
     * Get all threads that are active and has response in storage.
     * 
     * @return array
     */
    public static function getAllThreads()
    {
        $user_threads = MessageUserThread::inbox()->get();
                 
        return self::getThreadsArray($user_threads);
    }

    /**
     * Get all threads that are marked as unread and are active in storage.
     * 
     * @return array
     */
    public static function getUnreadThreads()
    {
        $user_threads = MessageUserThread::unread()->get();

        return self::getThreadsArray($user_threads);
    }

    /**
     * Get all threads that are marked as read and are active in storage.
     * 
     * @return array
     */
    public static function getReadThreads()
    {
        $user_threads = MessageUserThread::read()->get();

        return self::getThreadsArray($user_threads);
    }

    /**
     * Get all sent threads from specific user in storage.
     * 
     * @return array
     */
    public static function getSentThreads()
    {                         
        $user_threads = MessageThread::where('sender_id', Auth::user()->id)->with('active')->get();
    
        return self::getThreadsArray($user_threads);
    }

    /**
     * Get all threads that are marked as stared and are active in storage.
     * 
     * @return array
     */
    public static function getStarredThreads()
    {
        $user_threads = MessageUserThread::starred()->get();

        return self::getThreadsArray($user_threads);
    }

    /**
     * Get all threads with status = 0 in storage.
     * 
     * @return array
     */
    public static function getDeletedThreads()
    {
        $user_threads = MessageUserThread::archive()->get();

        return self::getThreadsArray($user_threads);
    }

    /**
     * Render threads list in associative array.
     * 
     * @param  object $user_threads 
     * @return array
     */
    public static function getThreadsArray($user_threads)
    {
        $user_threads_arr = [];
        $unread_num     = 0;
        $deleted_num    = 0;
        $starred_num    = 0;

        foreach ($user_threads as $user_thread) {

            $thread_id   = $user_thread->id;
            $subject     = $user_thread->thread->subject ?? $user_thread->subject;
            $message     = $user_thread->messages->last();
            $sender_id   = $user_thread->thread->sender_id ?? $user_thread->sender_id;
            $sender_name = $user_thread->thread->sender->name ?? $user_thread->sender->name;

            $message_arr  = (object) [
                'id'      => $message->id,
                'excerpt' => excerpt($message->body, 120, '...'),
                'created' => $message->created_at
            ];

            $is_read    = $user_thread->is_read ?? $user_thread->user_thread->is_read;
            $is_starred = $user_thread->is_starred ?? $user_thread->user_thread->is_starred;
            $status     = $user_thread->status ?? $user_thread->user_thread->status;

            if( $is_starred ) { $is_starred++; }
            if( !$is_read )   { $unread_num++; }
            if( !$status )    { $deleted_num++; }

            $user_threads_arr[]  = (object) [
                'id'             => $user_thread->id,
                'thread_id'      => $user_thread->message_thread_id ?? $user_thread->id,
                'subject'        => $subject,
                'sender'         => (object) [
                    'id'         => $sender_id,
                    'name'       => $sender_name
                ],
                'receiver'       => (object) [
                    'id'         => Auth::user()->id,
                    'name'       => Auth::user()->name
                ],
                'flag'           => $user_thread->flag ?? $user_thread->user_thread->flag,
                'is_read'        => $is_read,
                'is_starred'     => $is_starred,
                'status'         => $status,
                'updated'        => $user_thread->updated_at,
                'message'        => $message_arr,
                'messages_count' => count($user_thread->messages)
            ];
        }

        $data = (object) [
            'count' => (object) [
                'threads'    => count($user_threads),
                'unread'     => $unread_num,
                'starred'    => $starred_num,
                'deleted'    => $deleted_num
            ],
            'threads' => $user_threads_arr
        ];
      
        return $data;
    }

    /**
     * Update thread's status/is_read/is_starred in storage.
     * 
     * @param  array   $thread_ids 
     * @param  string  $field (status/is_read/is_starred)
     * @param  boolean $value 
     * @return object
     */
    public static function UpdateThread($thread_ids, $field, $value)
    {
        $thread_ids  = explode(',', $thread_ids);
        $thread_ids  = array_filter($thread_ids);

        if( empty($thread_ids) ) { return response()->json(['status' => 'error', 'message' => 'No threads selected']); }

        $user_threads = MessageUserThread::whereIn('message_thread_id', $thread_ids)
                                         ->where('user_id', Auth::user()->id)
                                         ->update([$field => $value]);

        return $user_threads;
    }

}