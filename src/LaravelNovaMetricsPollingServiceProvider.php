<?php

namespace Fidum\LaravelNovaMetricsPolling;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class LaravelNovaMetricsPollingServiceProvider extends ServiceProvider
{
    public function register()
    {
        Nova::serving(function () {
            Nova::script('laravel-nova-metrics-polling', __DIR__.'/../dist/js/index.js');
        });
    }
}
