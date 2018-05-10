<?php
Route::group(['prefix'=> 'employer/job','middleware' => ['web', 'role:Employer|Jobseeker']], function(){

    //    'Aesimpt\JobMessaging\Controllers\PageController@index'

    Route::get('/message/{job_id?}', 'Aesimpt\JobMessaging\Controllers\PageController@index' )->name('job-messaging.index');
    Route::post('/message/send', 'Aesimpt\JobMessaging\Controllers\JobMessageController@send' )->name('job-messaging.message-send');

    //    Route::get('/message', function(){
    //        return view('job-messaging::chat');
    //    })->name('job-messaging.index');
});

Route::group(
    [
        'prefix' => 'messages',
        'middleware' => [
            'web',
            'role:Employer|Jobseeker'
        ]
    ],
    function(){
        /**
         * Retrieve messages from the job, where the current logged on is jobseeker
         *
         */
        Route::get('job/[job_id?}', 'Aesimpt\JobMessaging\Controllers\JobMessageController@retrieve')->name('message-job.retrieve');
        Route::post('job/[job_id?}', 'Aesimpt\JobMessaging\Controllers\JobMessageController@retrieve')->name('message-job.store');
        Route::post('job/[job_id?}/load-more', 'Aesimpt\JobMessaging\Controllers\JobMessageController@retrieve')->name('message-job.load-more');

        /**
         * Retrieve messages form the specific job with jobseeker, who current logged on is the employer
         *
         */
        //        Route::get('job/{job_id?}/jobseeker/{jobseeker_id?}', 'Aesimpt\JobMessaging\Controllers\JobMessageController@retrieve')->name('message-job.jobseeker-retrieve');
        //        Route::post('job/{job_id?}/jobseeker/{jobseeker_id?}', 'Aesimpt\JobMessaging\Controllers\JobMessageController@retrieve')->name('message-job.jobseeker-store');
        //
    }
);