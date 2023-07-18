<?php

namespace Fidum\LaravelNovaMetricsPolling\Tests;

use Fidum\LaravelNovaMetricsPolling\LaravelNovaMetricsPollingServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public array $meta = [];

    protected function getPackageProviders($app)
    {
        return [
            LaravelNovaMetricsPollingServiceProvider::class,
        ];
    }

    protected function withMeta(array $meta)
    {
        $this->meta = array_merge($this->meta ?? [], $meta);

        return $this;
    }
}
