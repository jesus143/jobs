@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-account"></span>My Account</h2>
        <div class="dashboard-tab-inner">

            @include('account::jobseeker.includes.menu')

            <div class="row dashboard-tab-content">
                <form class="dashboard-form">
                    <div class="col-xs-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Current Password</p>
                            <input type="password">
                        </div>
                        <div class="form-sec">
                            <p class="label uppercase accent-color">New Password</p>
                            <input type="password">
                        </div>
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Confirm Password</p>
                            <input type="password">
                        </div>
                    </div>
                    <span class="clearfix"></span>
                    <div class="submit-area">
                        <input type="submit" value="Save Recent Changes">
                    </div>
                </form> <!-- form -->
            </div> <!-- .dashboard-tab-content -->

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection