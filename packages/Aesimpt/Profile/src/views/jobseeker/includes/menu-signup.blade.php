<nav class="dashboard-tab-titles">
    <ul>
        <li class="{{ is_active(['jobseeker-profile.signup-select-skills']) }} {{ is_step_completed('jobseeker-profile.signup-select-skills', ['', 'jobseeker-profile.signup-availability-and-experience','jobseeker-profile.signup-about-yourself']) }} "><a href="{{ route('jobseeker-profile.signup-select-skills') }}"><span class="step-num">1</span> Select your Skills</a></li>
        <li class="{{ is_active(['jobseeker-profile.signup-availability-and-experience']) }} {{ is_step_completed('jobseeker-profile.signup-availability-and-experience', ['', 'jobseeker-profile.signup-availability-and-experience','jobseeker-profile.signup-about-yourself']) }}" ><a href="{{ route('jobseeker-profile.signup-availability-and-experience') }}"><span class="step-num">2</span> Your Availability &amp; Experience</a></li>
        <li class="{{ is_active(['jobseeker-profile.signup-about-yourself']) }}" ><a href="{{ route('jobseeker-profile.signup-about-yourself') }}"><span class="step-num">3</span> Tell us more about Yourself</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>