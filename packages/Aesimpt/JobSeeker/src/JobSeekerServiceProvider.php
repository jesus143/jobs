<?php

namespace Aesimpt\JobSeeker;

use Illuminate\Support\ServiceProvider;

class JobSeekerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . '/routes/web/administrator.php');
        $this->loadRoutesFrom( __DIR__ . '/routes/web/employer.php');
        $this->loadRoutesFrom( __DIR__ . '/routes/web/jobseeker.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'jobseeker');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}