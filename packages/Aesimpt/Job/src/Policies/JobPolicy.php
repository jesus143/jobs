<?php

namespace Aesimpt\Job\Policies;

use App\User;
use Aesimpt\Job\Model\Job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {

    }

    /**
     * Determine whether the user can view the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function view(User $user, Job $job)
    {
        return $user->id === $job->employer_id;
    }

    /**
     * Determine whether the user can create jobs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function store(User $user)
    {

        return true;
        // is employer or administrator
    }

    /**
     * Determine whether the user can update the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function update(User $user, Job $job)
    {
        return $user->id === $job->employer_id;
    }

    /**
     * Determine whether the user can delete the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function destroy(User $user, Job $job)
    {
        return $user->id === $job->employer_id;
    }

    /**
     * This when tries to edit the job
     * @param User $user
     * @param Job $job
     */
    public function edit(User $user, Job $job)
    {
       return $user->id === $job->employer_id;
    }

    public function applicationHire(User $user, Job $job)
    {
        return $user->id === $job->employer_id;
    }

    public function applicationArchived(User $user, Job $job)
    {
        return $user->id === $job->employer_id;
    }

    public function applicationApplied(User $user, Job $job)
    {
        return $user->id !== $job->employer_id;
    }

    /**
     * Only can accept if user is the one who was invited for the job
     *
     * @param User $user
     * @param Job $job
     * @return bool
     */
    public function invitationAccept(User $user, Job $job)
    {
        return true;
    }

    /**
     * Only can reject if user is the one who was invited for the job
     *
     * @param User $user
     * @param Job $job
     * @return bool
     */
    public function invitationRejected(User $user, Job $job)
    {
        return true;
    }

    public function invited(User $user, Job $job)
    {
        $userJob = $job->jobUsers()->first();

        if($userJob->status == 'invited') {
            return true;
        } else {
            return false;
        }
    }

}
