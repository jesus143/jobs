@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title">Welcome to Office Escape</h2>
        <p class="dashboard-tab-area-desc">To get started, create your profile now and attract your potential employers. Showcase your best skills, set your availability to work, add your previous work experience (if any) and tell us more about yourself!</p>
        <div class="dashboard-tab-inner">

            @include('profile::jobseeker.includes.menu-edit')

            <div class="row dashboard-tab-content">
                <form class="dashboard-form about-yourself">
                    <div class="col-xs-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">About Me</p>
                            <p>A summary of yourself, experience, trainings, education, etc.</p>
                            <textarea></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Job Title <span data-toggle="tooltip" title="Lorem Ipsum Dolor Sit Amet">?</span></p>
                            <input type="text">
                        </div>
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Website</p>
                            <input type="text">
                        </div>
                    </div>
                    <span class="clearfix"></span>
                    <div class="col-xs-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Profile Photo</p>
                            <p>Browse and upload a photo. It must be actual picture of you. Recommended size is 150px by 150px.</p>
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
                    </div>
                    <div class="col-xs-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Profile Video</p>
                            <p>Tell us more about you in a video! Upload a video in YouTube, copy the video link and paste it  here:</p>
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
                    </div>
                    <span class="clearfix"></span>
                    <div class="col-xs-12"><h3 class="form-sec-title">Personal Details</h3></div>
                    <div class="col-lg-3 col-xs-4">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Birth Date</p>
                            <input type="text" class="datepicker">
                        </div>
                    </div>
                    <div class="col-lg-2 col-xs-4">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Age</p>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-2 col-xs-4">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Gender</p>
                            <select>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <span class="clearfix"></span>
                    <div class="col-lg-3 col-xs-4">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Contact Number</p>
                            <input type="tel">
                        </div>
                    </div>
                    <span class="clearfix"></span>
                    <div class="col-xs-12"><h3 class="form-sec-title">English Proficiency</h3></div>
                    <div class="col-lg-3 col-xs-4">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Speaking</p>
                            <select>
                                <option>Fluent English</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-4">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Writing</p>
                            <select>
                                <option>College Level</option>
                            </select>
                        </div>
                    </div>
                    <div class="submit-area">
                        <input type="submit" value="Save  Recent Changes">
                    </div>
                </form> <!-- form -->

            </div> <!-- .dashboard-tab-content -->

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection