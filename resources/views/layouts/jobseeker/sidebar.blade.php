
        <div class="col-xs-1 col-md-3 col-lg-2 padding-zero dashboard-sidebar">
            <div class="author-welcome">
                <a href="{{ route('jobseeker-profile.signup-select-skills') }}">
                    <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                </a>
                <h1><span>Welcome, jobseeker</span> {{ Auth::user()->id }} {{ Auth::user()->name }}</h1>
                <span class="clearfix"></span>
            </div>

            <nav class="sidebar-nav">
                <ul>
                   <li class="{{ is_active(['jobseeker-profile.overview', 'jobseeker-profile.edit-skills', 'jobseeker-profile.edit-about', 'jobseeker-profile.edit-availability-and-experience', 'jobseeker-profile.take-test']) }}"><a href="{{ route('jobseeker-profile.overview') }}"> <span class="nav-icon icon-my-profile"></span>Edit My profile</a></li>
                   <li class="{{ is_active(['jobseeker-profile.signup-select-skills', 'jobseeker-profile.signup-availability-and-experience', 'jobseeker-profile.signup-about-yourself']) }}" ><a href="{{ route('jobseeker-profile.signup-select-skills') }}"><span class="nav-icon icon-my-profile"></span>Signup My profile</a></li>
                   <li class="{{ is_active(['jobseeker-account.email', 'jobseeker-account.password', 'jobseeker-account.name', 'jobseeker-account.deactivate']) }}" ><a href="{{ route('jobseeker-account.email') }}"><span class="nav-icon icon-my-account"></span>My Account</a></li>
                   <li class="{{ is_active(['mail.inbox', 'mail.read', 'mail.unread', 'mail.starred', 'mail.deleted', 'mail.message.create']) }}"  ><a href="{{ route('mail.inbox') }}"><span class="nav-icon icon-my-inbox"></span>My Inbox</a></li>
                   <li class="{{ is_active(['jobseeker-job.active', 'active']) }}" ><a href="{{ route('jobseeker-job.active') }}"><span class="nav-icon icon-jobs-active"></span>Active Jobs</a></li>
                   <li class="{{ is_active(['jobseeker-job.applied', 'applied']) }}" ><a href="{{ route('jobseeker-job.applied') }}"><span class="nav-icon icon-jobs-applied"></span>Applied Jobs</a></li>
                   <li class="{{ is_active(['jobseeker-job.invited', 'invited']) }}" ><a href="{{ route('jobseeker-job.invited') }}"><span class="nav-icon icon-jobs-invited"></span>Invited Jobs</a></li>
                   <li class="{{ is_active(['jobseeker-job.bookmarked', 'boobmarked']) }}" ><a href="{{ route('jobseeker-job.bookmarked') }}"><span class="nav-icon icon-jobs-bookmarked"></span>Bookmarked Jobs</a></li>
                   <li class="{{ is_active(['jobseeker-job.completed', 'completed']) }}" ><a href="{{ route('jobseeker-job.completed') }}"><span class="nav-icon icon-jobs-completed"></span>Completed Jobs</a></li>
                   <li class="{{ is_active(['jobseeker-job.archived', 'archived']) }}" ><a href="{{ route('jobseeker-job.archived') }}"><span class="nav-icon icon-jobs-archived"></span>Archived Jobs</a></li>
                   <li class="{{ is_active(['jobseeker-job.search', 'search']) }}" ><a href="{{ route('jobseeker-job.search') }}"><span class="nav-icon icon-jobs-search"></span>Search Jobs</a></li>
                </ul>
            </nav>

            <div class="widget-area">
                <div class="take-tests">
                    <p class="widget-title">Take some tests to Attract more Employers</p>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <ul class="test-list">
                        <li class="test-taken">DISC Tests <a href="#">(taken)</a></li>
                        <li class="test-under-review">IQ Test  <a href="#">(under review)</a></li>
                        <li class="test-not-taken">English Proficiency Test  <a href="#">(take this test now)</a></li>
                    </ul>
                </div>
            </div> <!-- widget-area -->

            <div class="widget-area">
                <div class="upload-id">
                    <p class="widget-title">Increase your chances of getting hired</p>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <form class="upload-area">
                        <p class="upload-title">Add Government ID</p>
                        <p style="text-transform:uppercase;padding:15px 0;">upload yor ID Here</p>
                        <input type="file" name="file-7[]" id="file-7" class="inputfile"/>
                        <label for="file-7"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong><span></span></label>
                        <input type="submit" value="Upload"></input>
                    </form>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <img src="{{ asset('img/sample-ID.png') }}">
                    <p class="file-name">nbi_clearance.jpg</p>
                    <center><button class="btn-secondary uppercase btn-cancel uppercase">Delete ID</button></center>
                </div>
            </div> <!-- widget-area -->

            <div class="widget-area">
                <div class="job-cat">
                    <p class="widget-title">Search jobs by categories</p>
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


