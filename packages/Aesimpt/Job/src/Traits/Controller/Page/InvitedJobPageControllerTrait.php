<?php

namespace Aesimpt\Job\Traits\Controller\Page;

use Aesimpt\Job\Model\Job;
use Aesimpt\Job\Model\JobUser;

use Auth;

Trait InvitedJobPageControllerTrait {

    public function overview($id, $from_tab_name)
    {
        $user = Auth::user();

        $job = Job::find($id);

        if($from_tab_name == 'invited') {
            $this->authorize('invited', $job);
        }

        // This session will be used for sidebard highlighting
        session(['from_tab_name' => $from_tab_name]);

        return view('job::jobseeker.invited.overviews',
            compact('user', 'job', 'from_tab_name')
        );
    }

    public function chatbox($id, $from_tab_name)
    {
        $user = Auth::user();

        $job = Job::find($id);

        // This session will be used for sidebard highlighting
        session(['from_tab_name' => $from_tab_name]);

        return view('job::jobseeker.invited.chatbox',
            compact('user', 'job', 'from_tab_name')
        );
    }
}