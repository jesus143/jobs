@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title">Welcome to Office Escape</h2>
        <p class="dashboard-tab-area-desc">To get started, create your profile now and attract your potential employers. Showcase your best skills, set your availability to work, add your previous work experience (if any) and tell us more about yourself!</p>
        <div class="dashboard-tab-inner">

            @include("profile::employer.includes.menu-signup")

            <div class="row dashboard-tab-content">

                <div class="col-lg-7 col-xs-12">
                    <div class="form-sec profile-short-info">
                        <div class="profile-img">
                            <p><img src="{{ asset('img/sample-author-2.png') }}" height="100px" width="200px"></p>
                        </div>
                        <div class="profile-meta">
                            <h2 class="uppercase">Rafael Ilagan</h2>
                            <p class="uppercase accent-color">Micro Software Inc.</p>
                            <p><strong>Location:</strong><br>Seville, Spain</p>
                            <p><strong>Member since:</strong><br>October 30, 2016</p>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                </div>

                <div class="col-lg-5 col-xs-12 form-sec">
                    <p style="font-size:16px;"><span class="accent-color" style="font-size:20px;">0 Jobs Posted</span><br>0 Completed, 0 Active</p>
                    <p style="font-size:16px;"><span class="accent-color" style="font-size:20px;">0 Seekers Hired in Total</span><br>0 Active</p>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">About the Employer</h3>
                </div>

                <div class="col-lg-5 col-xs-12">
                    <div class="form-sec">
                        <p><span class="info-label">Contact:</span> Ricky Mateo</p>
                        <p><span class="info-label">Company Name:</span> Micro Software Inc.</p>
                        <p><span class="info-label">Position:</span> Project Manager</p>
                        <p><span class="info-label">Location:</span> Seville, Spain</p>
                    </div>
                </div>

                <div class="col-lg-7 col-xs-12">
                    <div class="form-sec profile-video-area">
                        <div class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/_qIRtFE6aIc" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <div class="form-sec">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                    </div>
                    <div class="form-sec">
                        <a href="#" class="dashed">Edit About the Employer</a>
                    </div>
                </div>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">Employer Reviews</h3>
                </div>

                <div class="col-xs-12">
                    <div class="form-sec">
                        <h3>No Reviews Yet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
                    </div>
                    <div class="form-sec">
                        <a href="#" class="btn-secondary">Post a new job</a>
                    </div>
                </div>
            </div>

            <div class="row submit-area">
                <div class="col-xs-6">
                    <a href="#" class="btn-secondary btn-cancel">Edit Profile</a>
                </div>
                <div class="col-xs-6" style="text-align:right;">
                    <button class="btn-secondary">Complete Profile</button>
                </div>
            </div>

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection