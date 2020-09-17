<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Storage\StorageService;

class StorageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //$this->mergeConfigFrom($this->configPath(), 'storage');
        $this->app->singleton(StorageService::class, function ($app) {
            return new StorageService();
        });
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
