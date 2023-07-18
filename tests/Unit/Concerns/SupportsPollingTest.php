<?php

use Fidum\LaravelNovaMetricsPolling\Concerns\SupportsPolling;

uses(SupportsPolling::class);

test('refreshIntervalMilliseconds with 0 milliseconds sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(0))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalMilliseconds with 100 milliseconds sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(100))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalMilliseconds with 10000 milliseconds sets the polling interval to 10000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(100))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalSeconds with 0 seconds sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(0))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalSeconds with 1 seconds sets the polling interval to 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(1))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalSeconds with 10 seconds sets the polling interval to 10000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(10))
    ->meta
    ->toBe(['pollingInterval' => 10000]);
