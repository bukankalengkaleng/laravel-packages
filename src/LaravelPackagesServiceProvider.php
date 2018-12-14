<?php

namespace BukanKalengKaleng\LaravelPackages;

use Illuminate\Support\ServiceProvider;
use BukanKalengKaleng\LaravelPackages\Console\Commands\LaravelPackages;

class LaravelPackagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaravelPackages::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
