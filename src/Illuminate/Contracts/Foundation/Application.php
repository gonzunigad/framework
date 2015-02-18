<?php namespace Illuminate\Contracts\Foundation;

use Closure;
use Illuminate\Contracts\Container\Container;

interface Application extends Container {

	/**
	 * Get the version number of the application.
	 *
	 * @return string
	 */
	public function version();

	/**
	 * Get or check the current application environment.
	 *
	 * @param  mixed
	 * @return string
	 */
	public function environment();

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @return bool
	 */
	public function isDownForMaintenance();

	/**
	 * Register all of the configured providers.
	 *F
	 * @return void
	 */
	public function registerConfiguredProviders();

	/**
	 * Register a service provider with the application.
	 *
	 * @param  \Illuminate\Support\ServiceProvider|string  $provider
	 * @param  array  $options
	 * @param  bool   $force
	 * @return \Illuminate\Support\ServiceProvider
	 */
	public function register($provider, $options = array(), $force = false);

	/**
	 * Register a deferred provider and service.
	 *
	 * @param  string  $provider
	 * @param  string  $service
	 * @return void
	 */
	public function registerDeferredProvider($provider, $service = null);

	/**
	 * Boot the application's service providers.
	 *
	 * @return void
	 */
	public function boot();

	/**
	 * Register a new boot listener.
	 *
	 * @param  mixed  $callback
	 * @return void
	 */
	public function booting($callback);

	/**
	 * Register a new "booted" listener.
	 *
	 * @param  mixed  $callback
	 * @return void
	 */
	public function booted($callback);

	/**
	 * Get the environment file the application is using.
	 *
	 * @return string
	 */
	public function environmentFile();

	/**
	 * Detect the application's current environment.
	 *
	 * @param  Closure  $callback
	 * @return string
	 */
	public function detectEnvironment(Closure $callback);

}
