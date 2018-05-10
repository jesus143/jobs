<?php

namespace Aesimpt\BladeDirective;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Blade;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', function ($view) {

            if(auth()->check()) {

                Artisan::call('view:clear');

                Blade::directive('jobseeker', function () {
                    $authRole = auth_user_role_name();
                    return "<?php if ('$authRole' === 'jobseeker') { ?>";
                });
                Blade::directive('endJobseeker', function () {
                    return "<?php } ?>";
                });

                Blade::directive('employer', function () {
                    $authRole = auth_user_role_name();
                    return "<?php if ('$authRole' === 'employer') { ?>";
                });
                Blade::directive('endEmployer', function () {
                    return "<?php } ?>";
                });

                Blade::directive('administrator', function () {
                    $authRole = auth_user_role_name();
                    return "<?php if ('$authRole' === 'administrator') { ?>";
                });
                Blade::directive('endAdministrator', function () {
                    return "<?php } ?>";
                });

            }
        });
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