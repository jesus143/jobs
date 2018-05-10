<?php

namespace Aesimpt\Job\Traits\Controller\Page;

use Auth;

use Aesimpt\Job\Model\Job;
use Aesimpt\Job\Model\JobUser;
use Illuminate\Support\Facades\Input;

Trait PostJobPageControllerTrait
{
    public function postNew()
    {
        $user = Auth::user();

        return view('job::employer.posts.new',
            compact('user')
        );
    }

    public function postEdit($id)
    {
        $job = Job::find($id);

        $this->authorize('edit', $job);

        $user = Auth::user();

        return view('job::employer.posts.edit',
            compact('user','job')
        );
    }

    public function postPosted()
    {
        $input = get_input();

        $user = Auth::user();

        $jobs = $user->myPostedJobs()
                ->orderBy('id', 'desc')
                ->filter($input)
                ->paginate(config('pagination.limit'));

        session_extract($jobs);

        return view('job::employer.posts.posted',
            compact('user', 'jobs')
        );
    }

    public function postActive()
    {
        $input = get_input();

        $user = Auth::user();

        $jobs = $user->myPostedJobs()
                ->filter($input)
                ->where('status', 'active')
                ->orderBy('id', 'desc')
                ->paginate(config('pagination.limit'));

        session_extract($jobs);

        return view('job::employer.posts.active',
            compact('user', 'jobs')
        );
    }

    public function postCompleted()
    {
        $input = get_input();

        $user = Auth::user();

        $jobs = $user->myPostedJobs()
                ->filter($input)
                ->where('status', 'completed')
                ->orderBy('id', 'desc')
                ->paginate(config('pagination.limit'));

        session_extract($jobs);

        return view('job::employer.posts.completed',
            compact('user', 'jobs')
        );
    }

    public function postDraft()
    {
        $input = get_input();

        $user = Auth::user();

        $jobs = $user->myPostedJobs()
                ->filter($input)
                ->where('status', 'draft')
                ->orderBy('id', 'desc')
                ->paginate(config('pagination.limit'));

        session_extract($jobs);

        return view('job::employer.posts.draft',
            compact('user', 'jobs')
        );
    }

    public function postArchived()
    {
        $input = get_input();

        $user = Auth::user();

        $jobs = $user->myPostedJobs()
                ->filter($input)
                ->where('status', 'archived')
                ->orderBy('id', 'desc')
                ->paginate(config('pagination.limit'));

        session_extract($jobs);

        return view('job::employer.posts.archived',
            compact('user', 'jobs')
        );
    }

}