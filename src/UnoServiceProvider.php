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
		$sass = realpath(__DIR__ . '/assets/sass');
		$js = realpath(__DIR__ . '/assets/js');
		$routes = realpath(__DIR__ . '/routes.php');
		$views = realpath(__DIR__ . '/views/app');

		$this->loadRoutesFrom($routes);

		$this->publishes([
			$sass => resource_path('assets/sass'),
		], 'sass');

		$this->publishes([
			$js => resources_path('assets/js'),
		], 'js');

		$this->loadViewsFrom($views, 'uno-theme');
	}
}
