<?php

namespace Aesimpt\JobMessaging\Controllers;


use Illuminate\Http\Request;
use Aesimpt\JobMessaging\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

class PageController extends Controller
{
    public function index($job_id)
    {
        $user = Auth::user();
        $data['current_id'] = $user->id;
        $data['job_id'] = $job_id;

        return view('job-messaging::job.messaging',
            [
                'current_id'=>$data['current_id'],
                'job_id'=>$job_id,
            ]);
    }
}
