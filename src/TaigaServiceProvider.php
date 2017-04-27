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
            __DIR__.'/../config/taiga.php' => $this->app->configPath('taiga.php'),
        ], 'config');
    }


    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/taiga.php', 'taiga');

        $this->app->bind(Taiga::class, function ($app) {
            $config = $app->config['taiga'];

            return new Taiga($config['api'], $config['token'], $config['language']);
        });
    }
}
