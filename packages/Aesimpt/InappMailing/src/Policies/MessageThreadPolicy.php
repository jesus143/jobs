<?php

namespace Aesimpt\InAppMailing\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessageThreadPolicy
{

	use HandlesAuthorization;

    /**
     * Check if current user can view the thread.
     * 
     * @param  \App\User $user 
     * @param  object $thread 
     * @return boolean
     */
    public function viewThread( User $user, $thread )
    {
        $user_ids   = [];
        $user_ids[] = $thread->sender_id;

        foreach ($thread->user_threads as $user_thread) {
            $user_ids[] = $user_thread->user_id;
        }

        return in_array($user->id, $user_ids);
    }
}