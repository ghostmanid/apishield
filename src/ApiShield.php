<?php

namespace Ghostmanid\ApiShield;

use Illuminate\Support\ServiceProvider;

class ApiShield extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached())
        {
            require __DIR__.'route.php';
        }
        $this->publishes([
                __DIR__.'/controllers' => base_path('app/Http/Controllers'),
                __DIR__.'/middleware' => base_path('app/Http/Middleware'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
