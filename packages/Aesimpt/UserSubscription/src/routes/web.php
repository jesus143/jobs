<?php

    Route::group(
        [
            'prefix'=> 'employer/subscription',
            'middleware' => [
                'web',
                'role:employer'
            ]
        ],
        function ( ) {
            Route::get('/', 'Aesimpt\UserSubscription\Controllers\PageController@index')->name('user-subscription.index');
            Route::get('/subscribe', 'Aesimpt\UserSubscription\Controllers\SubscriptionController@subscribe')->name('user-subscription.subscribe');
        }
    );



