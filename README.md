# A filament plugin for the VisJS graph package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cmsedore/filament-visjs.svg?style=flat-square)](https://packagist.org/packages/cmsedore/filament-visjs)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cmsedore/filament-visjs/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cmsedore/filament-visjs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cmsedore/filament-visjs/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cmsedore/filament-visjs/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cmsedore/filament-visjs.svg?style=flat-square)](https://packagist.org/packages/cmsedore/filament-visjs)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require cmsedore/filament-visjs
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-visjs-chart-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-visjs-chart-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentVisjs = new Cmsedore\FilamentVisjsChart();
echo $filamentVisjsChart->echoPhrase('Hello, Cmsedore!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Chris Sedore](https://github.com/cmsedore)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
