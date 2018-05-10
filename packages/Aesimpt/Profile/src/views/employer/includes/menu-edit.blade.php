<nav class="dashboard-tab-titles">
    <ul>
        <li class="{{ is_active(['employer-profile.overview']) }}" ><a href="{{ route('employer-profile.overview') }}">Profile Overview</a></li>
        <li class="{{ is_active(['employer-profile.edit-about']) }}" ><a href="{{ route('employer-profile.edit-about') }}">Edit About the Employer</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>

