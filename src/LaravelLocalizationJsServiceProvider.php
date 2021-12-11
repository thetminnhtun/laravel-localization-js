<?php

namespace Thetminnhtun\LaravelLocalizationJs;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelLocalizationJsServiceProvider extends ServiceProvider
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
        Blade::componentNamespace('Thetminnhtun\\LaravelLocalizationJs\\View\\Components', 'tmh');

        $this->publishes([
            __DIR__ . '/../dist/' => public_path('vendor/localization-js'),
        ], 'localization-js');
    }
}
