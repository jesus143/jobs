<?php

    Route::group(
        [
            'prefix'=> 'jobseeker/profile',
            'middleware' =>  [
                'web',
                'role:jobseeker'
            ]
        ],
        function ( ) {

            Route::get('/overview', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@overview')->name('jobseeker-profile.overview');

            Route::group(['prefix' => 'edit'], function() {
                Route::get('/skills', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@editSkills')->name('jobseeker-profile.edit-skills');
                Route::get('/about', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@editAbout')->name('jobseeker-profile.edit-about');
                Route::get('/availability-and-experience', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@editAvailabilityAndExperience')->name('jobseeker-profile.edit-availability-and-experience');
            });

            Route::get('/take-test', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@takeTest')->name('jobseeker-profile.take-test');

            Route::group(['prefix' => 'signup'], function() {
                Route::get('/select-skills', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@signupSelectYourSkills')->name('jobseeker-profile.signup-select-skills');
                Route::get('/availability-and-experience', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@signupYourAvailabilityAndExperience')->name('jobseeker-profile.signup-availability-and-experience');
                Route::get('/about-yourself', 'Aesimpt\Profile\Controllers\Page\JobseekerPageController@signupTellUsMoreAboutYourSelf')->name('jobseeker-profile.signup-about-yourself');
            });

        }
    );
