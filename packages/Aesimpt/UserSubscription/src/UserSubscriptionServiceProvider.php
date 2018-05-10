<?php

namespace Aesimpt\UserSubscription;

use Illuminate\Support\ServiceProvider;

class UserSubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'user-subscription');
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