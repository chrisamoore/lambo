<?php namespace JaggedIO\Lambo;

use Illuminate\Support\ServiceProvider;
use JaggedIO\Lambo\Helper\UIHelper;

class JaggedUiServiceProvider extends ServiceProvider
{

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
        \View::addNamespace('jaggedui', __DIR__.'/views');
        $this->package('jaggedui/uihelper');

        // Bring the application container instance into the local scope so we can
        // import it into the filters scope.
        $app = $this->app;

    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['jaggedui'] = $this->app->share(function($app){
            return new UIHelper($app['view']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['jaggedui'];
    }
}
