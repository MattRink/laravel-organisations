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
        $this->loadMigrationsFrom(__DIR__ . '../migrations');
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