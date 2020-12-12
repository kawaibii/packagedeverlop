<?php

namespace lekhoan\users;

use Illuminate\Support\ServiceProvider;

class userPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/Web.php');
        $this->loadMigrationsFrom(__DIR__.'/Migrate');
        $this->loadViewsFrom(__DIR__.'/views', 'users');
        $this->publishes([__DIR__ . '/config/roles.php' => config_path('roles.php')]);
    }
}
