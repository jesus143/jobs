<?php

namespace Aesimpt\InAppMailing\Controllers;
 
use Auth; 
use App\User;
use Exception;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Gate;
use Aesimpt\InAppMailing\Models\MessageThread;
use Aesimpt\InAppMailing\Models\MessageUserThread;
use Aesimpt\InAppMailing\Models\MessageThreadMessage;
use Aesimpt\InAppMailing\Requests\ThreadCreate;
use Aesimpt\InAppMailing\Requests\ThreadMessageCreate;
use Aesimpt\InAppMailing\Controllers\Controller;

class MailController extends Controller
{
    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create email thread.
     * 
     * @param  \Aesimpt\InAppMailing\Requests\ThreadCreate $request 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createThreadAction(ThreadCreate $request)
    {
        $send_message = MessageThread::createThread( $request->receiver, $request->subject, $request->body );

        return redirect()->route('mail.inbox');
    }

    /**
     * Create email thread message.
     * 
     * @param  \Aesimpt\InAppMailing\Requests\ThreadMessageCreate $request 
     * @param  int $id 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createMessageAction(ThreadMessageCreate $request, $id)
    {

        $thread = MessageThread::where('id', $id)->with('user_threads')->first();

        $this->authorize('viewThread', $thread);

        $send_message = MessageThreadMessage::createMessage( $thread, $request->body );
        
        // return redirect()->route('mail.message.create',  $send_message);
        return back();
    }

    /**
     * Update email thread read/status/starred.
     * 
     * @param  \Illuminate\Http\Request $request 
     * @param  string $status 
     * @param  int $bool 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateThreadAction(Request $request, $status, $bool)
    {
        $threads = MessageUserThread::UpdateThread($request->thread_ids, $status, $bool);

        return back();
    }
 
}