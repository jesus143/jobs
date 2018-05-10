<ul>
    <li class="{{ is_active(['jobseeker-job.overview']) }}" ><a href="{{ route('jobseeker-job.overview', ['id' => $job->id, 'from_tab_name' => $from_tab_name]) }}">Overview</a></li>

    @if(in_array($from_tab_name, __('chatbox.pages.allowed')) )
        <li class="{{ is_active(['jobseeker-job.chatbox']) }}" ><a href="{{ route('jobseeker-job.chatbox', ['id' => $job->id, 'from_tab_name' => $from_tab_name]) }}">Chatbox<span class="notice notice-num">10</span></a></li>
    @endif
</ul>


