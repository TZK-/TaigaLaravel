<?php

namespace TZK\TaigaLaravel;

use Illuminate\Support\ServiceProvider;
use TZK\Taiga\Taiga;

class TaigaServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/taiga.php' => config_path('taiga.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('taiga', function($app) {
            $base_url = config('taiga.base_url');
            $auth_token = config('taiga.auth_token');
            $language = config('taiga.language');

            return new Taiga($base_url, $auth_token, $language);
        });
    }
}
