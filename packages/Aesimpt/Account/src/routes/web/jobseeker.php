<?php

    Route::group(
        [
            'prefix'=> 'jobseeker/account',
            'middleware' => [
                'web',
                'role:jobseeker'
            ]
        ],
        function ( ) {
            Route::get('/email', 'Aesimpt\Account\Controllers\Page\JobseekerPageController@email')->name('jobseeker-account.email');
            Route::get('/password', 'Aesimpt\Account\Controllers\Page\JobseekerPageController@password')->name('jobseeker-account.password');
            Route::get('/name', 'Aesimpt\Account\Controllers\Page\JobseekerPageController@name')->name('jobseeker-account.name');
            Route::get('/deactivate', 'Aesimpt\Account\Controllers\Page\JobseekerPageController@deactivate')->name('jobseeker-account.deactivate');
        }
    );
