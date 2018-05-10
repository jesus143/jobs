<nav class="dashboard-tab-titles" style="margin:0;">
    <ul>
        <li class="{{ is_active(['employer-team.active']) }}"><a href="{{ route('employer-team.active') }}">Active</a></li>
        <li class="{{ is_active(['employer-team.invited']) }}"><a href="{{ route('employer-team.invited') }}">Invited</a></li>
        <li class="{{ is_active(['employer-team.past-employees']) }}"><a href="{{ route('employer-team.past-employees') }}">Past Employees</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>