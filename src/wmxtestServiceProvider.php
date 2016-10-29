<?php

namespace wmx\wmxtest;

use Illuminate\Support\ServiceProvider;

class wmxtestServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(base_path('resources/views/wmx/wmxtest'), 'wmxtest');
        $this->publishes([__DIR__.'/views' => base_path('resources/views/wmx/wmxtest')]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('wmx\wmxtest\TimezonesController');
    }
}