<!-- main header -->
<header id="header-wrap" class="container padding-zero">
    <div class="col-xs-3 col-lg-2 padding-zero logo-holder">
        <a href="#" class="logo"><img src="{{ asset('img/oes-logo.png') }}" width="226" height="23" /></a>
    </div>

    <div class="col-xs-9 col-lg-10 top-actions">
        <div class="dropdown-area">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">I'm Available For Hire
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Text</a></li>
                </ul>
            </div>
        </div>
        <div class="top-author">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Rafael Ilagan
                    <span class="caret"></span>
                    <img src="{{ asset('img/sample-author.png') }}" class="author-img" width="45" height="45">
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="nav-icon icon-my-account"></span>My Profile</a></li>
                    <li><a href="#"><span class="nav-icon icon-my-inbox"></span>My Inbox</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="nav-icon icon-my-inbox"></span>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <!-- <a href="#"><span class="nav-icon icon-my-inbox"></span>Logout</a> -->
                    </li>
                </ul>
            </div>
        </div>
        <span class="clearfix"></span>
    </div>
    <span class="clearfix"></span>
</header> <!-- header-wrap -->
