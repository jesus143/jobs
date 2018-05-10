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

trait JobApplicationControllerTrait
{
    /**
     * When employer hired a jobseeker who applied his posted and active jobs
     *
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function applicationHire(Request $request, $user_job_id)
    {
        $userJob = JobUser::find($user_job_id);

        $this->authorize('applicationHire', $userJob->job);

        $userJob->status = 'active';
        $userJob->save();

        flash()->overlay(__('messages.job.application.hired.body', ['name' => $userJob->jobseeker->name]));

        return back();

        //        $result = [
        //            'status' => 200,
        //            'data' =>  [],
        //            'message' => trans('messages.job.application.hired.body'),
        //        ];
        //
        //        return response($result);
    }

    /**
     * Employer who archived applicants who applied his posted and active jobs
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function applicationArchived(Request $request, $user_job_id)
    {
        $userJob = JobUser::find($user_job_id);

        $this->authorize('applicationArchived', $userJob->job);

        $userJob->status = 'archived applicant';
        $userJob->save();

        flash()->overlay(__('messages.job.application.archived.body', ['name' => $userJob->jobseeker->name]));

        return back();

        //        $result = [
        //            'status' => 200,
        //            'data' =>  [],
        //            'message' => trans('messages.job.application.archived.body'),
        //        ];
        //
        //        return response($result);
    }

    public function applicationApplied(Request $request, $job_id)
    {
        $job = Job::find($job_id);

        $this->authorize('applicationApplied', $job);

        // $userJob->status = 'archived applicant';
        // $userJob->save();

        flash()->overlay(__('messages.job.application.applied.body'));

        return back();
    }
}