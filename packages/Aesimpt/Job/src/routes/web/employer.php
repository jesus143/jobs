<?php
Route::group(
    [
        'prefix'=> 'employer/job',
        'middleware' =>  [
            'web',
            'role:employer'
        ]
    ],
    function ( ) {

        // PAGES
        Route::group(
            [
                'prefix' => 'application'
            ],
            function() {
                Route::get('/active', 'Aesimpt\Job\Controllers\Page\EmployerPageController@applicationActive')->name('employer-application.active');
                Route::get('/archived', 'Aesimpt\Job\Controllers\Page\EmployerPageController@applicationArchived')->name('employer-application.archived');
            }
        );

        // POST ( ACTIONS )
        Route::group(
            [
                'prefix' => 'application'
            ],
            function() {
                Route::post('/active/{user_job_id?}', 'Aesimpt\Job\Controllers\JobUserController@applicationHire')->name('employer-application.active');
                Route::post('/archived/{user_job_id?}', 'Aesimpt\Job\Controllers\JobUserController@applicationArchived')->name('employer-application.archived');
            }
        );


        // PAGES
        Route::group(
            [
                'prefix'=> 'post'
            ],
            function() {
                // Pages
                Route::get('/new', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postNew')->name('employer-job.post-new');
                Route::get('/new/{job}/edit', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postEdit')->name('employer-job.post-edit');
                Route::get('/posted', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postPosted')->name('employer-job.post-posted');
                Route::get('/active', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postActive')->name('employer-job.post-active');
                Route::get('/completed', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postCompleted')->name('employer-job.post-completed');
                Route::get('/draft', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postDraft')->name('employer-job.post-draft');
                Route::get('/archived', 'Aesimpt\Job\Controllers\Page\EmployerPageController@postArchived')->name('employer-job.post-archived');
            }
        );

        // RESOURCE ( ACTION )
        Route::group(
            [
                'prefix'=> 'post'
            ],
            function() {
                Route::resource('/action', 'Aesimpt\Job\Controllers\JobController', [
                    'except' => ['index','create', 'show', 'edit'],
                    'names' =>  'employer-job',
                ]);
            }
        );
    }
);