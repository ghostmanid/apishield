<?php

namespace ghostmanid\apishield;

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
