<?php

namespace Jermashley;

use Illuminate\Support\ServiceProvider;

class LaravelUnoTheme extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $sass = __DIR__ . 'assets/sass';
        $js = __DIR__ . 'assets/js';

        $this->loadRoutesFrom(__DIR__ . 'routes.php');

        $this->publishes([
            $sass => resource_path('assets/sass')
        ], 'sass');

        $this->publishes([
            $js => resources_path('assets/js')
        ], 'js');

        $this->loadViewsFrom(__DIR__ . 'views/app', 'laravel-uno-theme');

    }

}