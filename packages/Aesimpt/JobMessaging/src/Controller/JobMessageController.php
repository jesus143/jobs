<?php

namespace Aesimpt\JobMessaging\Controllers;

use Aesimpt\JobMessaging\Model\JobMessage;
use Illuminate\Http\Request;
use Aesimpt\JobMessaging\Controllers\Controller;
use Aesimpt\JobMessaging\Events\JobMessageEvent;

use Auth;

class JobMessageController extends Controller
{

    /**
     * Change the paramter to job user id
     *
     * @param Request $requests
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function send(Request $requests)
    {
        $_request = $requests->all();

        $user = Auth::user();

        $data['sender'] = $user;
        $data['job_id'] = $_request['job_id'];
        $data['message'] = $_request['msg'];
        $data['sender_name'] = $user->name;

        event(new JobMessageEvent($data));


        $jobMessage = new JobMessage();
        $jobMessage->sender_id = 5;
        $jobMessage->receiver_id = 1;
        $jobMessage->job_user_id = 1;
        $jobMessage->content = $_request['msg'];
        $jobMessage->save();





        return response(['status'=>'Sent!']);
    }
}
