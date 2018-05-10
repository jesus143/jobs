@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title">Welcome to Office Escape</h2>
        <p class="dashboard-tab-area-desc">To get started, create your profile now and attract your potential employers. Showcase your best skills, set your availability to work, add your previous work experience (if any) and tell us more about yourself!</p>
        <div class="dashboard-tab-inner">

            @include("profile::employer.includes.menu-signup")

            <div class="row dashboard-tab-content">
                <form class="dashboard-form">
                    <div class="form-sec col-xs-6 col-lg-3">
                        <p class="label uppercase accent-color">Company Name<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span></p>
                        <input type="text">
                    </div>
                    <div class="form-sec col-xs-6 col-lg-3">
                        <p class="label uppercase accent-color">Position<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span></p>
                        <input type="text">
                    </div>
                    <div class="form-sec col-xs-6 col-lg-3">
                        <p class="label uppercase accent-color">City</p>
                        <input type="text">
                    </div>
                    <div class="form-sec col-xs-6 col-lg-3">
                        <p class="label uppercase accent-color">Country*</p>
                        <input type="text">
                    </div>
                    <span class="clearfix"></span>
                    <div class="form-sec col-md-12">
                        <p class="label uppercase accent-color">About the employer<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span></p>
                        <p>Tell us more about you (e.g. services you offer, product you sell, etc.)</p>
                        <textarea></textarea>
                    </div>

                    <div class="submit-area" style="text-align:center;">
                        <input type="submit" value="Continue">
                    </div>
                </form> <!-- form -->
            </div> <!-- .dashboard-tab-content -->

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection