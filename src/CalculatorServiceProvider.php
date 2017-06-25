<?php

namespace babyfaceEasy\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if(!this->app->routeAreCached()){
            require __DIR__.'./routes.php';
        }

        $this->loadViewsFrom(base_path('resources/views'), 'Calculator');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views')
        ]);

        $this->publishes([
            __DIR__.'/views' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}