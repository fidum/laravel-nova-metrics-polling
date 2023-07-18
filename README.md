# Easily add polling to all your Laravel Nova metrics and cards!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fidum/laravel-nova-metrics-polling.svg?style=for-the-badge)](https://packagist.org/packages/fidum/laravel-nova-metrics-polling)
[![GitHub Workflow Status (with branch)](https://img.shields.io/github/actions/workflow/status/fidum/laravel-nova-metrics-polling/run-tests.yml?branch=main&style=for-the-badge)](https://github.com/fidum/laravel-nova-metrics-polling/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Twitter Follow](https://img.shields.io/badge/follow-%40danmasonmp-1DA1F2?logo=twitter&style=for-the-badge)](https://twitter.com/danmasonmp)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require fidum/laravel-nova-metrics-polling
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-nova-metrics-polling-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-nova-metrics-polling-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-nova-metrics-polling-views"
```

## Usage

```php
$laravelNovaMetricsPolling = new Fidum\LaravelNovaMetricsPolling();
echo $laravelNovaMetricsPolling->echoPhrase('Hello, Fidum!');
```

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
