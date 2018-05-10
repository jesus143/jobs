<?php

    Route::group(
        [
            'prefix'=> 'employer/team',
            'middleware' => [
                'web',
                'role:employer'
            ]
        ],
        function ( ) {
            Route::get('/active', 'Aesimpt\Team\Controllers\Page\EmployerPageController@active')->name('employer-team.active');
            Route::get('/invited', 'Aesimpt\Team\Controllers\Page\EmployerPageController@invited')->name('employer-team.invited');
            Route::get('/past-employees', 'Aesimpt\Team\Controllers\Page\EmployerPageController@pastEmployees')->name('employer-team.past-employees');
        }
    );