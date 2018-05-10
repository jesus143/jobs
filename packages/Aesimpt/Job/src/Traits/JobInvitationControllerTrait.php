<?php
/**
 * Created by PhpStorm.
 * User: jesus143
 * Date: 4/19/2018
 * Time: 7:14 PM
 */

namespace Aesimpt\Job\Traits;
use Aesimpt\Job\Model\JobUser;
use Aesimpt\Job\Model\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

trait JobInvitationControllerTrait
{

    /**
     * Jobseeker accept invitation
     *
     * @param Request $request
     * @param $user_job_id
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function invitedAccept(Request $request, $id)
    {
        $input = get_input($request);

        $user = Auth::user();

        $job = Job::find($id);

        $userJob = $job->jobUsers->where('job_seeker_id', $user->id)->first();

        $this->authorize('invitationAccept', $job);

        $userJob->status = 'active';
        $userJob->description = $input->description;
        $userJob->save();

        flash()->overlay(__('messages.job.invitation.accept.body'));

        return redirect(route('jobseeker-job.active'));
    }

    /**
     * Jobseeker reject invitation
     *
     * @param Request $request
     * @param $user_job_id
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function invitedReject(Request $request, $id)
    {
        $user = Auth::user();

        $job = Job::find($id);

        $userJob = $job->jobUsers()->where('job_seeker_id', $user->id)->first();

        $this->authorize('invitationRejected', $job);

        $userJob->status = 'rejected';
        $userJob->save();

        flash()->overlay(__('messages.job.invitation.reject.body'));

        return redirect(route('jobseeker-job.invited'));

    }
}