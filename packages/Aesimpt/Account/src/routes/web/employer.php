<?php

    Route::group(
        [
            'prefix'=> 'employer/account',
            'middleware' => [
                'web',
                'role:employer'
            ]
        ],
        function ( ) {
            Route::get('/email', 'Aesimpt\Account\Controllers\Page\EmployerPageController@email')->name('employer-account.email');
            Route::get('/password', 'Aesimpt\Account\Controllers\Page\EmployerPageController@password')->name('employer-account.password');
            Route::get('/name', 'Aesimpt\Account\Controllers\Page\EmployerPageController@name')->name('employer-account.name');
            Route::get('/deactivate', 'Aesimpt\Account\Controllers\Page\EmployerPageController@deactivate')->name('employer-account.deactivate');
            Route::get('/payment-detail', 'Aesimpt\Account\Controllers\Page\EmployerPageController@paymentDetail')->name('employer-account.payment-detail');
        }
    );