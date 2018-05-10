@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-profile"></span>My Profile</h2>
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
                    <div class="form-sec col-xs-6">
                        <p class="label uppercase accent-color">Profile Photo</p>
                        <p>Browse and upload an image that best represents you or your company. May it be an actual photo of you or your company logo. Recommended size is 150px by 150px.</p>
                        <div class="img-file-upload">
                            <input type="file" name="file-7[]" id="file-7" class="inputfile"/>
                            <label for="file-7"><span class="file-name"></span><strong>Choose a file</strong></label>
                            <br>
                            <p class="no-radius">
                                <img class="preview-image image-big" src="" alt="">
                            <p>
                            <p class="with-radius">
                                <img class="preview-image image-big" src="" alt="">

                            <p>
                                <span class="clearfix"></span>
                                <span class="image-preview-clear">Delete Photo</span>
                        </div>
                    </div>
                    <div class="form-sec col-xs-6">
                        <p class="label uppercase accent-color">Profile Video</p>
                        <p>You can put a video that would explain more about your company, your services, products or sample work. Just copy the link of your video uploaded in YouTube and paste it  here:</p>
                        <input type="text" class="video-upload">
                        <br><br>
                        <div class="row" class="video-upload-area">
                            <div class="col-lg-8 col-xs-12">
                                <div id="youtube_preview"><div class="video-wrapper"></div></div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <button class="btn-secondary uppercase" style="width:100%;">Upload Video</button><br><br>
                                <button class="btn-secondary btn-cancel uppercase" style="width:100%;">Delete Video</button>
                            </div>
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