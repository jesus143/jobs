<?php

    Route::group(
        [
            'prefix'=> 'employer/jobseeker',
            'middleware' =>  [
                'web',
                'role:employer'
            ]
        ],
        function ( ) {

            Route::get("/test", function(){
                return 'jobseekers page working';
            });

            Route::get('/bookmarked','Aesimpt\JobSeeker\Controllers\PageController@bookmarked')->name('employer-jobseeker.bookmarked');
            Route::get('/search','Aesimpt\JobSeeker\Controllers\PageController@search')->name('employer-jobseeker.search');
        }
    );

