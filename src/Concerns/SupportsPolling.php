<?php

namespace Fidum\LaravelNovaMetricsPolling\Concerns;

trait SupportsPolling
{
    public function refreshIntervalMilliseconds(int|callable $milliseconds): self
    {
        $milliseconds = (int) value($milliseconds);

        return $this->withMeta(['pollingInterval' => max(1000, $milliseconds)]);
    }

    public function refreshIntervalSeconds(int|callable $seconds): self
    {
        $seconds = (int) value($seconds);

        return $this->refreshIntervalMilliseconds($seconds * 1000);
    }
}
