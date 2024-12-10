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
    }

    public function register()
    {
        $this->app->singleton('singapore', function ($app) {
            return new Singapore;
        });
    }
}
