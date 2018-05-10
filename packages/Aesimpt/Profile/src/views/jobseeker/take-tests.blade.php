@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-profile"></span>My Profile</h2>
        <div class="dashboard-tab-inner">

            @include('profile::jobseeker.includes.menu')

            <div class="row dashboard-tab-content">
                <form class="dashboard-form test-form">
                    <div class="col-md-12 form-sec">
                        <p>Please take a few quick minutes to take the following tests. The reulsts of this tests will help ypu find a job that fits your abilities, personality and work ethics.</p>
                    </div>
                    <div class="form-sec tab-inner">
                        <div class="col-xs-3">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#test-1" data-toggle="tab">DISC PersonalityTest</a>
                                </li>
                                <li class="active">
                                    <a href="#test-2" data-toggle="tab">IQ Test</a>
                                </li>
                                <li>
                                    <a href="#test-3" data-toggle="tab">English Proficiency Test</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-9">
                            <div class="tab-content">
                                <div class="tab-pane" id="test-1">
                                    <h4 class="form-sec-title-2">DISC PersonalityTest</h4>
                                </div>
                                <div class="tab-pane active" id="test-2">
                                    <h4 class="form-sec-title-2">IQ Test</h4>
                                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p class="text-center"><a href="#" class="btn btn-secondary">Take the test</a></p>
                                </div>
                                <div class="tab-pane" id="test-3">
                                    <h4 class="form-sec-title-2">English Proficiency Test</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-sec">
                        <div class="col-md-12"><h3 class="form-sec-title">Test Results</h3></div>
                        <div class="col-xs-4">
                            <p class="accent-color uppercase">DISC Tests<span class="icon-test-done accent-color-2" style="font-size:20px;vertical-align:middle;"></span></p>
                            <p>Dominance: 41<br>
                                Influence: 11<br>
                                Steadiness: 15<br>
                                Compliance: 34</p>
                            <p class="accent-color-2">The results for this test are currently under review. We will immediately post it in your profile once it is verfied.</p>
                        </div>
                        <div class="col-xs-4">
                            <p class="accent-color uppercase">IQ Test<span class="icon-test-review accent-color" style="font-size:20px;vertical-align:middle;"></span></p>
                            <p>115</p>
                            <p class="accent-color">This result is verified and is currently displayed on your profile.</p>
                        </div>
                        <div class="col-xs-4">
                            <p class="accent-color uppercase">English Proficiency Test<span class="icon-test-take error-color" style="font-size:20px;vertical-align:middle;"></span></p>
                            <p><span class="error-color">You haven’t taken this test yet!</span><br><a href="#" class="dashed">Take this test here.</a></p>
                            <p>If you’ve finished the test, paste the URL of the results below:</p>
                            <p><input type="text" placeholder="http://"></p>
                            <p>We will then  notify you when it is verified and post it immediately in your profile.</p>
                        </div>
                    </div>
                    <div class="submit-area">
                        <input value="Save  Recent Changes" type="submit">
                    </div>
                </form>
            </div>

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection