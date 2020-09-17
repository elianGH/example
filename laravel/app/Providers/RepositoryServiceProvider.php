<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\Repositories\Users\TeamRepository',
            'App\Repositories\Users\TeamRepository',
        );

        $this->app->bind(
            'App\Contracts\Repositories\Users\ClientRepository',
            'App\Repositories\Users\ClientRepository',
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
