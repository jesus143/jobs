<nav class="dashboard-tab-titles">
    <ul>
        <li class="{{ is_active(['employer-account.email']) }}" ><a href="{{ route('employer-account.email') }}">Email Address</a></li>
        <li class="{{ is_active(['employer-account.password']) }}" ><a href="{{ route('employer-account.password') }}">Password</a></li>
        <li class="{{ is_active(['employer-account.name']) }}" ><a href="{{ route('employer-account.name') }}">Name</a></li>
        <li class="{{ is_active(['employer-account.deactivate']) }}" ><a href="{{ route('employer-account.deactivate') }}">Deactivate Account</a></li>
        <li class="{{ is_active(['employer-account.payment-detail']) }}" ><a href="{{ route('employer-account.payment-detail') }}">Payment Details</a></li>
    </ul>
    <span class="clearfix"></span>
</nav>