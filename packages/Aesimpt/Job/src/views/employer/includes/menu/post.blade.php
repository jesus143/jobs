    <ul>
        <li class="{{ is_active(['employer-job.post-posted']) }}" ><a href="{{ route('employer-job.post-posted') }}">Posted Jobs</a></li>
        <li class="{{ is_active(['employer-job.post-active']) }}" ><a href="{{ route('employer-job.post-active') }}">Active</a></li>
        <li class="{{ is_active(['employer-job.post-completed']) }}" ><a href="{{ route('employer-job.post-completed') }}">Completed</a></li>
        <li class="{{ is_active(['employer-job.post-draft']) }}" ><a href="{{ route('employer-job.post-draft') }}">Draft</a></li>
        <li class="{{ is_active(['employer-job.post-archived']) }}" ><a href="{{ route('employer-job.post-archived') }}">Archived</a></li>
    </ul>
    <span class="clearfix"></span>
