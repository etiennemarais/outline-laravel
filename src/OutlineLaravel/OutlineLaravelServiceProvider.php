<?php
namespace OutlineLaravel;

use Illuminate\Support\ServiceProvider;

class OutlineLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['outline:regenerate'] = $this->app->share(function () {
            return new Commands\Regenerate();
        });

        $this->commands(
            'outline:regenerate'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Nothing to register
    }
}