<?php

namespace Jermashley\LaravelUnoTheme;

use Illuminate\Support\ServiceProvider;

class UnoServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $routes = realpath(__DIR__ . '/routes.php');
        $sass = realpath(__DIR__ . '/assets/sass');
		$js = realpath(__DIR__ . '/assets/js');
		$images = realpath(__DIR__ . '/assets/images');
		$video = realpath(__DIR__ . '/assets/video');
		$views = realpath(__DIR__ . '/views/app');
		$webpack = realpath(__DIR__ . '/webpack.mix.js');

		$this->loadRoutesFrom($routes);

        $this->loadViewsFrom($views, 'uno-theme');

        $this->publishes([
			$sass => resource_path('assets/sass'),
		], 'sass');

		$this->publishes([
			$js => resource_path('assets/js'),
		], 'js');

        $this->publishes([
            $images => resource_path('assets/images'),
        ], 'images');

        $this->publishes([
            $video => resource_path('assets/video'),
        ], 'video');

		$this->publishes([
		    $webpack => base_path('webpack.mix.js')
        ], 'webpack');

	}
}
