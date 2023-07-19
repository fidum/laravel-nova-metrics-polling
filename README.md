# Easily add polling to all your Laravel Nova metrics and cards!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fidum/laravel-nova-metrics-polling.svg?style=for-the-badge)](https://packagist.org/packages/fidum/laravel-nova-metrics-polling)
[![GitHub Workflow Status (with branch)](https://img.shields.io/github/actions/workflow/status/fidum/laravel-nova-metrics-polling/run-tests.yml?branch=main&style=for-the-badge)](https://github.com/fidum/laravel-nova-metrics-polling/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Twitter Follow](https://img.shields.io/badge/follow-%40danmasonmp-1DA1F2?logo=twitter&style=for-the-badge)](https://twitter.com/danmasonmp)

Easily add polling to all your Laravel Nova metrics and cards!

## Installation

You can install the package via composer:

```bash
composer require fidum/laravel-nova-metrics-polling
```

## Usage

Firstly, just add the `SupportsPolling` trait to any of your Metrics or Card classes:

```php
<?php

namespace App\Nova\Metrics;

use Fidum\LaravelNovaMetricsPolling\Concerns\SupportsPolling;

class NewUsers extends Value
{
    use SupportsPolling;
```

Then in the Dashboard, Resource or Lens `cards` method where you have registered your card you can call `refreshIntervalSeconds` and pass in the number of seconds you want the interval to be between refresh requests. You can 
also pass a closure as needed.

```php
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\NewOrders;

public function cards(NovaRequest $request)
{
    return [
        NewUsers::make()->refreshIntervalSeconds(30),
        NewOrders::make()->refreshIntervalSeconds(fn () => 30),
    ];
}
```

If preferred, you can call `refreshIntervalMilliseconds` instead and pass in the number of milliseconds you want the interval to be between refresh requests.

```php
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\NewOrders;

public function cards(NovaRequest $request)
{
    return [
        NewUsers::make()->refreshIntervalMilliseconds(3000),
        NewOrders::make()->refreshIntervalMilliseconds(fn () => 3000),
    ];
}
```

That is it, your cards should now be polling at the specified intervals! :tada:

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/fidum/.github/blob/main/CONTRIBUTING.md) for details.

## Credits

- [Dan Mason](https://github.com/fidum)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
