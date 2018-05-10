<?php

namespace Aesimpt\Profile\Traits\Controllers\Page\Jobseeker;

trait EditPageControllerTrait {

    public function editSkills()
    {
        return view('profile::jobseeker.edit.skills');
    }

    public function editAbout()
    {
        return view('profile::jobseeker.edit.about');
    }

    public function editAvailabilityAndExperience()
    {
        return view('profile::jobseeker.edit.availability-and-experience');
    }

}