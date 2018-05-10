<?php

namespace Aesimpt\InAppMailing\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessageUserThreadPolicy
{

	use HandlesAuthorization;

	/**
     * Check if current user can view the thread.
     * 
     * @param  \App\User $user 
     * @param  object $thread_user 
     * @return boolean
     */
    public function viewUserThread( User $user, $thread_user )
    {
    	return $user->id == $thread_user->user_id;
    }
}