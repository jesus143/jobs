<?php

namespace Aesimpt\Profile\Traits\Controllers\Page\Jobseeker;

trait SignupPageControllerTrait {

    public function signupSelectYourSkills()
    {

        return view('profile::jobseeker.signup.select-skills');
    }

    public function signupYourAvailabilityAndExperience()
    {
        return view('profile::jobseeker.signup.availability-and-experience');
    }

    public function signupTellUsMoreAboutYourSelf()
    {
        return view('profile::jobseeker.signup.about-yourself');
    }

}