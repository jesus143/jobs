<nav class="dashboard-tab-titles">
    <ul>
        <li class="{{ is_active(['jobseeker-account.email']) }}" ><a href="{{ route('jobseeker-account.email') }}">Email Address</a></li>
        <li class="{{ is_active(['jobseeker-account.password']) }}" ><a href="{{ route('jobseeker-account.password') }}">Password</a></li>
        <li class="{{ is_active(['jobseeker-account.name']) }}" ><a href="{{ route('jobseeker-account.name') }}">Name</a></li>
        <li class="{{ is_active(['jobseeker-account.deactivate']) }}" ><a href="{{ route('jobseeker-account.deactivate') }}">Deactivate Account</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>