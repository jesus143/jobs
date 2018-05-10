@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="nav-icon icon-my-account"></span>My Account</h2>
        <div class="dashboard-tab-inner">

            @include('account::jobseeker.includes.menu')

            <div class="row dashboard-tab-content">
                <form class="dashboard-form">
                    <div class="col-md-12">
                        <div class="form-sec">
                            <p>You must use your real, verifiable name according to Office Escape’s <a href="#">Terms of Service.</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">New First Name</p>
                            <input type="text">
                        </div>
                        <div class="form-sec">
                            <p class="label uppercase accent-color">New Last Name</p>
                            <input type="text">
                        </div>
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Confirm new Password</p>
                            <input type="password">
                        </div>
                    </div>
                    <div class="submit-area">
                        <input type="submit" value="Save recent Changes">
                    </div>

                </form> <!-- form -->
            </div> <!-- .dashboard-tab-content -->


        </div> <!-- .dashboard-tab-inner -->
    </div><!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection