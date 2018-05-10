<?php

namespace Aesimpt\Job\Controllers;

use Aesimpt\Job\Model\JobUser;
use Illuminate\Http\Request;

use Aesimpt\Job\Model\Job;
use Auth;
use Aesimpt\Job\Requests\StoreJobRequest as JobRequest;

use Aesimpt\Job\Traits\JobInvitationControllerTrait as Invitation;



class JobController extends Controller
{
    use Invitation;

    public function bookmark(Request $request, $id)
    {
        $user = Auth::user();

        $job = Job::find($id);

        //
        $userJob = $job->jobUsers->where('job_seeker_id', $user->id)->first();

        // If there is no bookmarked happen yet
        if(! $userJob) {
            $userJob = new JobUser();
            $userJob->job_seeker_id = $user->id;
            $userJob->job_id = $id;
        }

        $userJob->status = 'bookmarked';
        $userJob->save();

        flash()->overlay(__('messages.job.bookmarked.body'));

        return redirect(route('jobseeker-job.bookmarked'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $this->authorize('store', Job::class);

        $_input = $request->all();
        $user = Auth::user();

        $job = new Job();

        $job->position = $_input['position'];
        $job->hours = $_input['hours'];
        $job->salary = $_input['salary'];
        $job->skills = json_encode(explode(',', $_input['skills']));
        $job->description = $_input['description'];
        $job->employer_id = $user->id;
        $job->status = (isset($_input['post'])) ? 'active' : 'draft';
        $job->title = 'dummy title';
        $job->type = 'Full Time';
        $job->save();

        if((isset($_input['draft']))) {
            flash()->overlay(__('messages.post.draft.body'), __('messages.post.draft.title'));
        } else {
            flash()->overlay(__('messages.post.new.body'), __('messages.post.new.title'));
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $_input = $request->all();
        $user = Auth::user();
        $job = Job::find($id);

        $this->authorize('update', $job);

        $job->position = $_input['position'];
        $job->hours = $_input['hours'];
        $job->salary = $_input['salary'];
        $job->skills = json_encode(explode(',', $_input['skills']));
        $job->description = $_input['description'];
        $job->employer_id = $user->id;
        $job->status = (isset($_input['update'])) ? 'active' : 'draft';
        $job->title = 'dummy title';
        $job->type = 'Full-Time';

        $job->save();

        if((isset($_input['update']))) {
            flash()->overlay(__('messages.post.update.body'), __('messages.post.update.title'));
        } else {
            flash()->overlay(__('messages.post.draft.body'), __('messages.post.draft.title'));
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        $this->authorize('destroy', $job);

        $job->delete();

        flash()->overlay(__('messages.post.deleted.body', ['position'=>$job->position]), __('messages.post.deleted.title'));

        return back();
    }

}
