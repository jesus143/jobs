<?php

namespace Aesimpt\InAppMailing\Controllers;
 
use Auth; 
use Illuminate\Support\Facades\Gate;
use Aesimpt\InAppMailing\Models\MessageThread;
use Aesimpt\InAppMailing\Models\MessageUserThread;
use Aesimpt\InAppMailing\Controllers\Controller; 

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get all message from inbox.
     * 
     * @param  \Aesimpt\InAppMailing\Models\MessageUserThread $user_thread 
     * @return \Illuminate\Http\Response
     */
    public function getInbox( MessageUserThread $user_thread )
    {       
        $data = $user_thread::getAllThreads();
        // dd($data);
        return view('appmail::message-box')->with(compact('data'));
    }

    /**
     * Get all unread messages.
     * 
     * @param  \Aesimpt\InAppMailing\Models\MessageUserThread $user_thread 
     * @return \Illuminate\Http\Response
     */
    public function getUnreadBox( MessageUserThread $user_thread )
    {
        $data = $user_thread::getUnreadThreads();

        return view('appmail::message-box')->with(compact('data'));
    }

    /**
     * Get all read messages.
     * 
     * @param  \Aesimpt\InAppMailing\Models\MessageUserThread $user_thread 
     * @return \Illuminate\Http\Response
     */
    public function getReadBox( MessageUserThread $user_thread )
    {
        $data = $user_thread::getReadThreads();

        return view('appmail::message-box')->with(compact('data'));
    }

    /**
     * Get all sent messages.
     * 
     * @param  \Aesimpt\InAppMailing\Models\MessageUserThread $user_thread 
     * @return \Illuminate\Http\Response
     */
    public function getSentBox(MessageUserThread $user_thread)
    {
        $data = $user_thread::getSentThreads();
       
        return view('appmail::message-box')->with(compact('data'));
    }

    /**
     * Get all starred messages.
     * 
     * @param  \Aesimpt\InAppMailing\Models\MessageUserThread $user_thread 
     * @return \Illuminate\Http\Response
     */
    public function getStarredBox( MessageUserThread $user_thread )
    {
        $data = $user_thread::getStarredThreads();

        return view('appmail::message-box')->with(compact('data'));
    }

    /**
     * Get all deleted messages.
     * 
     * @param  \Aesimpt\InAppMailing\Models\MessageUserThread $user_thread 
     * @return \Illuminate\Http\Response
     */
    public function getDeletedBox( MessageUserThread $user_thread )
    {
        $data = $user_thread::getDeletedThreads();

        return view('appmail::message-box')->with(compact('data'));
    }

    /**
     * Show create email thread form.
     * 
     * @return \Illuminate\Http\Response
     */
    public function threadCreate()
    {
        return view('appmail::create.thread');
    }

    /**
     * Show reply email form.
     * 
     * @param  type int
     * @return \Illuminate\Http\Response
     */
    public function messageCreate( $thread_id )
    {   
        $thread   = MessageThread::where('id', $thread_id)->with('user_threads')->with('messages')->first();

        $this->authorize('viewThread', $thread);

        $data = MessageThread::getThreadMessages($thread);

        return view('appmail::create.message')->with( compact('data') );
    }
}