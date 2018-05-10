<nav class="dashboard-tab-titles" style="margin:0;">
    <ul>
        <li class="{{ is_active(['employer-application.active']) }}" ><a href="{{ route('employer-application.active') }}">Active Applications</a></li>
        <li class="{{ is_active(['employer-application.archived']) }}" ><a href="{{ route('employer-application.archived') }}">Archived Applications</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>
