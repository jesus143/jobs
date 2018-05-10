
<div id="oes-dashboard" class="container padding-zero employer-dashboard">
    <div class="col-xs-1 col-md-3 col-lg-2 padding-zero dashboard-sidebar">
        <div class="author-welcome">
            <a href="{{ route('employer-profile.overview') }}">
                <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
            </a>
            <h1><span>Welcome, employer</span> {{ Auth::user()->id }} {{ Auth::user()->name }}</h1>
            <span class="clearfix"></span>
        </div>

        <nav class="sidebar-nav">
            <ul>
                <li class="{{ is_active(['employer-profile.overview', 'employer-profile.edit-about']) }}"  ><a href="{{ route('employer-profile.overview') }}"><span class="nav-icon icon-my-profile"></span>Edit My profile</a></li>
                <li class="{{ is_active(['employer-profile.signup-basic-information', 'employer-profile.signup-image-and-video', 'employer-profile.signup-preview']) }}"  ><a href="{{ route('employer-profile.signup-basic-information') }}"><span class="nav-icon icon-my-profile"></span>Signup My profile</a></li>
                <li class="{{ is_active(['employer-account.email', 'employer-account.password', 'employer-account.name', 'employer-account.deactivate', 'employer-account.payment-detail']) }}"  ><a href="{{ route('employer-account.email') }}"><span class="nav-icon icon-my-account"></span>My Account</a></li>
                <li class="{{ is_active(['mail.inbox', 'mail.read', 'mail.unread', 'mail.starred', 'mail.deleted', 'mail.message.create']) }}"  ><a href="{{ route('mail.inbox') }}"><span class="nav-icon icon-my-inbox"></span>My Inbox</a></li>
                <li class="{{ is_active(['employer-job.post-new']) }}"  ><a href="{{ route('employer-job.post-new') }}"><span class="nav-icon icon-jobs-active"></span>Post a new Job</a></li>
                <li class="{{ is_active(['employer-job.post-posted', 'employer-job.post-active', 'employer-job.post-completed', 'employer-job.post-draft', 'employer-job.post-archived', ]) }}" ><a href="{{ route('employer-job.post-posted') }}"><span class="nav-icon icon-jobs-applied"></span>My Job Posts</a></li>
                <li class="{{ is_active(['employer-application.active', 'employer-application.archived']) }}"  ><a href="{{ route('employer-application.active') }}"><span class="nav-icon icon-jobs-invited"></span>Job Applicants</a></li>
                <li class="{{ is_active(['employer-team.active', 'employer-team.invited', 'employer-team.past-employees']) }}"  ><a href="{{ route('employer-team.active') }}"><span class="nav-icon icon-team"></span>My Team</a></li>
                <li class="{{ is_active(['employer-team-workplace.soon']) }}"  ><a href="{{ route('employer-team-workplace.soon') }}"><span class="nav-icon icon-team-workplace"></span>Team Workplace</a></li>
                <li class="{{ is_active(['employer-jobseeker.bookmarked']) }}" ><a href="{{ route('employer-jobseeker.bookmarked') }}"><span class="nav-icon icon-jobs-bookmarked"></span>Bookmarked Seekers</a></li>
                <li class="{{ is_active(['employer-jobseeker.search']) }}" ><a href="{{ route('employer-jobseeker.search') }}"><span class="nav-icon icon-jobs-search"></span>Search Jobs Seekers</a></li>
            </ul>
        </nav>

        <div class="widget-area">
            <div class="job-cat">
                <p class="widget-title">Search resumes by skills</p>
                <ul class="cat-list">
                    <li class="cat-item-has-children"><a href="#" data-toggle="collapse" data-target="#cat-item-parent-id-1">Office Administration</a>
                        <ul id="cat-item-parent-id-1" class="panel-collapse collapse">
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                        </ul>
                    </li>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Marketing and Sales</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li class="cat-item-has-children"><a href="#" data-toggle="collapse" data-target="#cat-item-parent-id-2">Web Development</a>
                        <ul id="cat-item-parent-id-2" class="panel-collapse collapse">
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Web Master</a></li>
                    <li class="cat-item-has-children"><a href="#" data-toggle="collapse" data-target="#cat-item-parent-id-2">Graphics &amp; Multimedia</a>
                        <ul id="cat-item-parent-id-2" class="panel-collapse collapse">
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Software Development/Programming</a></li>
                    <li><a href="#">Finance &amp; Management</a></li>
                    <li><a href="#">Mobile App Development</a></li>
                </ul>
            </div>
        </div> <!-- widget-area -->
    </div> <!-- dashboard-sidebar -->
