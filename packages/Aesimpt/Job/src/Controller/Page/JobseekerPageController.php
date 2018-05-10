<?php

namespace Aesimpt\Job\Controllers\Page;

use Aesimpt\Job\Model\JobUser;
use Aesimpt\Job\Model\Job;
use Illuminate\Http\Request;
use Aesimpt\Job\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;


use Aesimpt\Job\Traits\Controller\Page\InvitedJobPageControllerTrait as InvitedJobs;


class JobseekerPageController extends Controller
{
    use InvitedJobs;

    /**
     * Active jobs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activeJobs()
    {
        $input = (!empty(\Request::all())) ? (object) \Request::all() : (object) Input::all();

        $user = Auth::user();

        $userJobs =  $user->myJobs()
                ->where('status', 'active')
                ->whereHas('job', function($query) use ($input) {
                    $query->filter($input);
                })
                ->orderBy('id', 'desc')
                ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::jobseeker.active',
            compact('user', 'userJobs')
        );
    }

    /**
     * Applied jobs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function appliedJobs()
    {
        $input = (!empty(\Request::all())) ? (object) \Request::all() : (object) Input::all();

        $user = Auth::user();

        $userJobs = $user->myJobs()
            ->where('status', 'applied')
            ->orWhere('status', 'archived applicant')
            ->whereHas('job', function($query) use ($input) {
                $query->filter($input);
            })
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::jobseeker.applied',
            compact('user', 'userJobs')
        );
    }

 /**
     * Applied jobs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function invitedJobs()
    {
        $input = (!empty(\Request::all())) ? (object) \Request::all() : (object) Input::all();

        $user = Auth::user();

        $userJobs = $user->myJobs()
            ->where('status', 'invited')
            ->whereHas('job', function($query) use ($input) {
                $query->filter($input);
            })
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::jobseeker.invited',
            compact('user', 'userJobs')
        );
    }

    /**
     * Archived job page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function archivedJobs()
    {
        $input = (!empty(\Request::all())) ? (object) \Request::all() : (object) Input::all();

        $user = Auth::user();

        $userJobs =  $user->myJobs()
            ->where('status', 'archived')
            ->whereHas('job', function($query) use ($input) {
                $query->filter($input);
            })
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::jobseeker.archived',
            compact('user', 'userJobs')
        );
    }

    /**
     * Bookmarked jobs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bookmarkedJobs()
    {
        $input = (!empty(\Request::all())) ? (object) \Request::all() : (object) Input::all();

        $user = Auth::user();

        $userJobs = $user->myJobs()
            ->where('status', 'bookmarked')
            ->whereHas('job', function($query) use ($input) {
                $query->filter($input);
            })
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::jobseeker.bookmarked',
            compact('user', 'userJobs')
        );
    }

    /**
     * Completed jobs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function completedJobs()
    {
        $input = (!empty(\Request::all())) ? (object) \Request::all() : (object) Input::all();

        $user = Auth::user();

        $userJobs =  $user->myJobs()
            ->where('status', 'completed')
            ->whereHas('job', function($query) use ($input) {
                $query->filter($input);
            })
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));

        session_extract($userJobs);

        return view('job::jobseeker.completed',
            compact('user', 'userJobs')
        );
    }

    /**
     * Search jobs page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchJobs()
    {
        $input = get_input();

        $user = Auth::user();

        $jobs = Job::filter($input)
            // ->filter($input, 'category')
            ->filter($input)
            ->where('status', 'active')
            ->orderBy('id', 'desc')
            ->paginate(config('pagination.limit'));


        return view('job::jobseeker.search',
            compact('user', 'jobs')
        );
    }

    public function detailJob($id)
    {
        $job = Job::find($id);

        return view('job::jobseeker.detail',
            compact('user', 'job')
        );
    }

}
