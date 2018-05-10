<?php

namespace Aesimpt\InAppMailing\Models;

use Illuminate\Database\Eloquent\Model;
use Aesimpt\InAppMailing\Traits\MessageThreadMessageTraits as Message;

class MessageThreadMessage extends Model
{
    use Message;
    
    protected $table = 'message_thread_messages';

    protected $guarded = ['thread_id'];

    /**
     * Get the user sender of the thread's message.
     */
    public function sender()
    {
        return $this->belongsTo('App\User', 'sender_id');
    }

    /**
     * Get the user receiver of the thread's message.
     */
    public function receiver()
    {
        return $this->belongsTo('App\User', 'receiver_id');
    }

    /**
     * Get the thread of the message.
     */
    public function thread()
    {
    	$this->belongsTo('Aesimpt\InAppMailing\Models\MessageThread');
    }

}