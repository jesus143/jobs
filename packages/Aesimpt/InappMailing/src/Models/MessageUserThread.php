<?php

namespace Aesimpt\InAppMailing\Models;

use Auth; 
use Illuminate\Database\Eloquent\Model;
use Aesimpt\InAppMailing\Traits\MessageUserThreadTrait as UserThread;

class MessageUserThread extends Model
{
    use UserThread;

    protected $user_id;
    protected $table = 'message_user_threads';

    public function __construct()
    {
    	$this->user_id = Auth::user()->id;
    }

    /**
     * Get messages of the thread.
     */
    public function messages()
    {
    	return $this->hasMany('Aesimpt\InAppMailing\Models\MessageThreadMessage', 'message_thread_id', 'message_thread_id');
    }

    /**
     * Get main thread of the user thread.
     */
    public function thread()
    {
    	return $this->belongsTo('Aesimpt\InAppMailing\Models\MessageThread', 'message_thread_id');
    }

    /**
     * Get all threads that has response and is active.
     */
    public function scopeInbox($query)
    {
        return $query->where('user_id', $this->user_id)
                     ->where('status', 1)
                     ->where('has_response', 1);
    }

    /**
     * Get all threads that are active.
     */
    public function scopeActive($query)
    {
    	return $query->where('user_id', $this->user_id)
    				 ->where('status', 1);
    }

    /**
     * Get all deleted threads.
     */
    public function scopeArchive($query)
    {
    	return $query->where('user_id', $this->user_id)
    			     ->where('status', 0);
    }

    /**
     * Get all starred and active threads.
     */
    public function scopeStarred($query)
    {
    	return $query->where('user_id', $this->user_id)
    				 ->where('is_starred', 1)
    				 ->where('status', 1);
    }

    /**
     * Get all threads that are marked as read and are active.
     */
    public function scopeRead($query)
    {
    	return $query->where('user_id', $this->user_id)
                     ->where('has_response', 1)
    				 ->where('is_read', 1)
    				 ->where('status', 1);
    }

    /**
     * Get all threads that are marked as unread and are active.
     */
    public function scopeUnread($query)
    {
    	return $query->where('user_id', $this->user_id)
    			     ->where('is_read', 0)
    			     ->where('status', 1);
    }
} 