@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title">Welcome to Office Escape</h2>
        <p class="dashboard-tab-area-desc">To get started, create your profile now and attract your potential employers. Showcase your best skills, set your availability to work, add your previous work experience (if any) and tell us more about yourself!</p>
        <div class="dashboard-tab-inner">

            @include("profile::employer.includes.menu-signup")

            <div class="row dashboard-tab-content">
                <form class="dashboard-form">
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
                    <div class="submit-area">
                        <div class="col-xs-6">
                            <a href="#" class="btn-secondary btn-cancel">Edit Basic Info</a>
                        </div>
                        <div class="col-xs-6" style="text-align:right;">
                            <input type="submit" value="Continue">
                        </div>
                    </div>
                </form> <!-- form -->
            </div> <!-- .dashboard-tab-content -->
        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection