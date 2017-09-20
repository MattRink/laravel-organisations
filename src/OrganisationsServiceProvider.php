<?php

namespace MattRink\Organisations;

use Illuminate\Support\ServiceProvider;

class OrganisationsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the service provider
     * 
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views');
    }

    /**
     * Register ther service provider
     * 
     * @return void
     */
    public function register()
    {

    }

}