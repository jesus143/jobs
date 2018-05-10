<?php

namespace Aesimpt\Job\Traits\Controller\Page;

use Auth;

use Aesimpt\Job\Model\Job;
use Aesimpt\Job\Model\JobUser;
use Illuminate\Support\Facades\Input;

Trait ApplicationJobPageControllerTrait {

    // // get job whereHas job_users applied with job_user where status applied
    // get jobuser where status = applied wherehas job where employer_id = myid

    public function applicationActive()
    {
        $input = get_input();

        $user = Auth::user();

        $userJobs = JobUser::where('status', 'applied')
                ->whereHas('job', function($query) use ($user, $input) {
                    $query->where('employer_id', $user->id);
                    $query->filter($input);
                })
                ->whereHas('jobseeker', function($query) use ($input) {
                    $query->filter($input, 'name');
                })
                ->orderBy('id', 'desc')
                ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::employer.applications.active',
            compact('user', 'userJobs')
        );
    }

    //// get job whereHas job_users archived applicant with job_user where status archived applicants
    // get jobuser where status = archived applican wherehas job where employer_id = myid
    public function applicationArchived()
    {
        $input = get_input();

        $user = Auth::user();

        $userJobs = JobUser::where('status', 'archived applicant')
            ->whereHas('job', function($query) use ($user, $input) {
                $query->where('employer_id', $user->id);
                $query->filter($input);
            })
            ->whereHas('jobseeker', function($query) use ($input) {
                $query->filter($input, 'name');
            })
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));

        return view('job::employer.applications.archived',
            compact('user', 'userJobs')
        );
    }

}