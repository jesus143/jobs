<?php

namespace Aesimpt\Profile\Traits\Controllers\Page\Employer;

trait SignupPageControllerTrait {

    public function  signupBasicInformation()
    {
        return view('profile::employer.signup.basic-information');
    }

    public function signupImageAndVideo()
    {
        return view('profile::employer.signup.image-and-video');
    }

    public function signupPreview()
    {
        return view('profile::employer.signup.preview');
    }
}