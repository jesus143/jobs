<?php

    Route::group(
        [
            'prefix'=> 'employer/team-workplace',
            'middleware' => [
                'web',
                'role:employer'
            ]
        ],
        function ( ) {
            Route::get('/soon', 'Aesimpt\TeamWorkplace\Controllers\Page\EmployerPageController@soon')->name('employer-team-workplace.soon');
        }
    );