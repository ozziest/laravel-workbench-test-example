<?php namespace Ozziest\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ozziest/sample');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['ozziest.sample'] = $this->app->share(function($app)
        {
            return new Sample(
            		new Repositories\SampleRepository(
            				new Models\Sample
            			)
            	);
        });		
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
