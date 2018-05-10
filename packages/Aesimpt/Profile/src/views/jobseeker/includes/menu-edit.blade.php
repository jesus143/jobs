<nav class="dashboard-tab-titles">
    <ul>
        <li class="{{ is_active(['jobseeker-profile.overview']) }}"><a href="{{ route('jobseeker-profile.overview') }}">Profile Overview</a></li>
        <li class="{{ is_active(['jobseeker-profile.edit-skills']) }}"><a href="{{ route('jobseeker-profile.edit-skills') }}">Edit Skills</a></li>
        <li class="{{ is_active(['jobseeker-profile.edit-about']) }}" ><a href="{{ route('jobseeker-profile.edit-about') }}">Edit About me</a></li>
        <li class="{{ is_active(['jobseeker-profile.edit-availability-and-experience']) }}"><a href="{{ route('jobseeker-profile.edit-availability-and-experience') }}">Edit Availability &amp; Experience</a></li>
        <li class="{{ is_active(['jobseeker-profile.take-test']) }}"><a href="{{ route('jobseeker-profile.take-test') }}">Take Tests</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>
