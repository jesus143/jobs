<?php

    Route::group(
        [
            'prefix'=> 'jobseeker/job',
            'middleware' =>  [
                'web',
                'role:jobseeker|employer'
            ]
        ],
        function ( ) {
            /**
             * PAGES
             */
            Route::get('/active', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@activeJobs')->name('jobseeker-job.active');
            Route::get('/applied', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@appliedJobs')->name('jobseeker-job.applied');
            Route::get('/invited', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@invitedJobs')->name('jobseeker-job.invited');
            Route::get('/bookmarked', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@bookmarkedJobs')->name('jobseeker-job.bookmarked');
            Route::get('/completed', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@completedJobs')->name('jobseeker-job.completed');
            Route::get('/archived', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@archivedJobs')->name('jobseeker-job.archived');
            Route::get('/search', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@searchJobs')->name('jobseeker-job.search');

            /**
             * Jobseeker able to vie a specific job from search
             */
            Route::group(
                [
                    'prefix' => '/{id?}'
                ],
                function ( ) {
                    Route::get('/overview/{from_tab_name?}', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@overview')->name('jobseeker-job.overview');
                    Route::get('/chatbox/{from_tab_name?}', 'Aesimpt\Job\Controllers\Page\JobseekerPageController@chatbox')->name('jobseeker-job.chatbox');
                }
            );

            /**
             * When jobseeker applied a job and submit hist application
             */
            Route::post('/{id?}/application/submitted', 'Aesimpt\Job\Controllers\JobUserController@applicationApplied')->name('jobseeker-job.application-submitted');

            /**
             * When jobseeker accept or reject employer invitation for a job
             */
            Route::post('/{id?}/invited/reject', 'Aesimpt\Job\Controllers\JobController@invitedReject')->name('jobseeker-job.invited-reject');
            Route::post('/{id?}/invited/accept', 'Aesimpt\Job\Controllers\JobController@invitedAccept')->name('jobseeker-job.invited-accept');
            Route::post('/{id?}/bookmark', 'Aesimpt\Job\Controllers\JobController@bookmark')->name('jobseeker-job.bookmark');
         }
   );
