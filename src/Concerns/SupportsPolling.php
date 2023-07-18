<?php

namespace Fidum\LaravelNovaMetricsPolling\Concerns;

trait SupportsPolling
{
    public function refreshIntervalMilliseconds(int $milliseconds): self
    {
        return $this->withMeta(['pollingInterval' => max(1000, $milliseconds)]);
    }

    public function refreshIntervalSeconds(int $seconds): self
    {
        return $this->refreshIntervalMilliseconds($seconds * 1000);
    }
}
