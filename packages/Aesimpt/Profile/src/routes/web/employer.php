<?php

    Route::group(
        [
            'prefix'=> 'employer/profile',
            'middleware' =>  [
                'web',
                'role:employer'
            ]
        ],
        function ( ) {

            Route::group(
                [
                    'prefix'=> 'signup'
                ],
                function() {
                    Route::get('/basic-information', 'Aesimpt\Profile\Controllers\Page\EmployerPageController@signupBasicInformation')->name('employer-profile.signup-basic-information');
                    Route::get('/image-and-video', 'Aesimpt\Profile\Controllers\Page\EmployerPageController@signupImageAndVideo')->name('employer-profile.signup-image-and-video');
                    Route::get('/preview', 'Aesimpt\Profile\Controllers\Page\EmployerPageController@signupPreview')->name('employer-profile.signup-preview');
                }
            );

            Route::get('/overview', 'Aesimpt\Profile\Controllers\Page\EmployerPageController@overview')->name('employer-profile.overview');

            Route::group(
                [
                    'prefix'=>'edit'
                ],
                function() {
                    Route::get('/about', 'Aesimpt\Profile\Controllers\Page\EmployerPageController@editAbout')->name('employer-profile.edit-about');
                }
            );

        }
    );