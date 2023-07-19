<?php

use Fidum\LaravelNovaMetricsPolling\Concerns\SupportsPolling;

uses(SupportsPolling::class);

afterEach(fn () => $this->meta = []);

test('refreshIntervalMilliseconds with 0 milliseconds sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(0))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalMilliseconds with 100 milliseconds sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(100))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalMilliseconds with a closure returning 100 milliseconds sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(fn () => 100))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalMilliseconds with 1000 milliseconds sets the polling interval to 10000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(10000))
    ->meta
    ->toBe(['pollingInterval' => 10000]);

test('refreshIntervalMilliseconds with a closure returning 1000 milliseconds sets the polling interval to 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(fn () => 1000))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalMilliseconds with a closure returning a non-numeric value sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalMilliseconds(fn () => 'NaN'))
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

test('refreshIntervalSeconds with closure returning 1 seconds sets the polling interval to 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(fn () => 1))
    ->meta
    ->toBe(['pollingInterval' => 1000]);

test('refreshIntervalSeconds with 10 seconds sets the polling interval to 10000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(10))
    ->meta
    ->toBe(['pollingInterval' => 10000]);

test('refreshIntervalSeconds with with closure returning 10 seconds sets the polling interval to 10000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(fn () => 10))
    ->meta
    ->toBe(['pollingInterval' => 10000]);

test('refreshIntervalSeconds with a closure returning a non-numeric value sets the polling interval to the minimum 1000 milliseconds')
    ->expect(fn () => $this->refreshIntervalSeconds(fn () => 'NaN'))
    ->meta
    ->toBe(['pollingInterval' => 1000]);
