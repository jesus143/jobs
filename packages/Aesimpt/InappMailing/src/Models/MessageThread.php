<?php

namespace Aesimpt\InAppMailing\Models;

use Auth; 
use Illuminate\Database\Eloquent\Model;
use Aesimpt\InAppMailing\Traits\MessageThreadTrait as Thread;

class MessageThread extends Model
{
    use Thread;
    
    protected $table = 'message_threads';

    /**
     * Get the user sender of the thread.
     */
    public function sender()
    {
        return $this->belongsTo('App\User', 'sender_id');
    }

    /**
     * Get the users of the thread (many).
     */
    public function user_threads()
    {
    	return $this->hasMany('Aesimpt\InAppMailing\Models\MessageUserThread', 'message_thread_id');
    }

    /**
     * Get the user of the thread (one).
     */
    public function user_thread()
    {
        return $this->hasOne('Aesimpt\InAppMailing\Models\MessageUserThread', 'message_thread_id')->where('user_id', Auth::user()->id);
    }

    /**
     * Get all the messages of the thread.
     */
    public function messages()
    {
    	return $this->hasMany('Aesimpt\InAppMailing\Models\MessageThreadMessage', 'message_thread_id');
    }

    /**
     * Get all user threads from the thread with status = 1.
     */
    public function active()
    {
        return $this->hasMany('Aesimpt\InAppMailing\Models\MessageUserThread', 'message_thread_id')->where('status', 1);
    }
    
} 