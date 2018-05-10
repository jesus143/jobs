<?php

namespace Aesimpt\InAppMailing;

use Illuminate\Support\Facades\Gate;
use Aesimpt\InAppMailing\Models\MessageThread;
use Aesimpt\InAppMailing\Models\MessageUserThread;
use Aesimpt\InAppMailing\Policies\MessageThreadPolicy;
use Aesimpt\InAppMailing\Policies\MessageUserThreadPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class InAppMailingServiceProvider extends ServiceProvider
{

    protected $policies = [
        MessageThread::class     => MessageThreadPolicy::class,
        MessageUserThread::class => MessageUserThreadPolicy::class,
    ];
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'appmail');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/Aesimpt/InappMailing'),
        ], 'inappmailing_views');

        $this->publishes([
            __DIR__.'/migrations' => $this->app->databasePath().'/migrations',
        ], 'inappmailing_migrations');

        $this->publishes([
            __DIR__.'/config.php' => config_path('appmail-config.php'),
        ], 'inappmailing_config');
    
        $this->registerPolicies();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Aesimpt\InAppMailing\Controllers\Controller');
    }

} // end Class
