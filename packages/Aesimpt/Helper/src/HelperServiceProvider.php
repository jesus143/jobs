<?php

namespace Aesimpt\Helper;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $folders = array (
            __DIR__ . '/style/',
            __DIR__ . '/collection/',
        );

        foreach($folders as $folder) {
            foreach (glob("{$folder}/*.php") as $filename) {
                include $filename;
            }
        }

        $this->loadViewsFrom(__DIR__ . '/views', 'helper');
        $this->loadTranslationsFrom(__DIR__.'/lang', 'customhelper');

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