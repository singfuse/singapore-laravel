<?php

namespace Vinkas\Singapore;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'singapore-migrations');

        $this->publishes([
            __DIR__.'/../config/singapore.php' => config_path('singapore.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('singapore', function ($app) {
            return new Singapore;
        });
    }
}
