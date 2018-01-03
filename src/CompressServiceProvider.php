<?php

namespace Compress;

use Illuminate\Support\ServiceProvider;

class CompressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/views', 'compress');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/compress'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Compress\CompressController');
    }
}
