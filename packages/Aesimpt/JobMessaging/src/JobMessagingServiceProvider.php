<?php

namespace Aesimpt\JobMessaging;

use Illuminate\Support\ServiceProvider;

class JobMessagingServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'job-messaging');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    }
}