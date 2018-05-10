<?php

    Route::group(
        [
            'prefix'=> 'test'
        ],
        function ( ) {
            Route::get('header', function() {

                return 'test';

            });
        }
    );