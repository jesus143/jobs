<nav class="dashboard-tab-titles">
    <ul>
        <li class="{{ is_active(['employer-profile.signup-basic-information']) }} {{ is_step_completed('employer-profile.signup-basic-information', ['', 'employer-profile.signup-basic-information', 'employer-profile.signup-image-and-video', 'employer-profile.signup-preview']) }}" ><a href="{{ route('employer-profile.signup-basic-information') }}"><span class="step-num">1</span> Basic Information</a></li>
        <li class="{{ is_active(['employer-profile.signup-image-and-video']) }} {{ is_step_completed('employer-profile.signup-image-and-video', ['', 'employer-profile.signup-basic-information', 'employer-profile.signup-image-and-video', 'employer-profile.signup-preview']) }}" ><a href="{{ route('employer-profile.signup-image-and-video') }}"><span class="step-num">2</span> Your Profile Image and Video </a></li>
        <li class="{{ is_active(['employer-profile.signup-preview']) }}" ><a href="{{ route('employer-profile.signup-preview') }}"><span class="step-num">3</span> Profile Preview</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>

