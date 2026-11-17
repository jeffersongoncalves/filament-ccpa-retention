<div class="filament-hidden">

![Filament CCPA Retention](https://raw.githubusercontent.com/jeffersongoncalves/filament-ccpa-retention/3.x/art/jeffersongoncalves-filament-ccpa-retention.png)

</div>

# Filament CCPA Retention

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-ccpa-retention.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-ccpa-retention)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-ccpa-retention/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-ccpa-retention/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-ccpa-retention/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-ccpa-retention/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-ccpa-retention.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-ccpa-retention)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-ccpa-retention.svg?style=flat-square)](LICENSE.md)

The Filament panel for [laravel-ccpa-retention](https://github.com/jeffersongoncalves/laravel-ccpa-retention). Under the CCPA, personal information is kept no longer than reasonably necessary for the purpose you disclosed (Cal. Civ. Code §1798.100(a)(3)). This page lets you see what is due, run the retention, and erase again the data a restored backup brought back.

## Features

- **Preview:** how many records would be anonymized now, per model and column. Nothing is changed.
- **Apply retention:** anonymizes every column whose period has ended, each with its own strategy.
- **Re-apply after backup:** anonymizes again the columns that a restored backup brought back.
- The list of anonymized columns (tombstones), filterable by model and column. Tombstones hold no personal data.
- 19 languages.

## Compatibility

| Plugin Version                                                                | Filament |
|-------------------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-ccpa-retention/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-ccpa-retention/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-ccpa-retention/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-ccpa-retention:"^3.0"
php artisan vendor:publish --tag="ccpa-retention-migrations"
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\CcpaRetention\CcpaRetentionPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            CcpaRetentionPlugin::make()
                ->navigationGroup('CCPA')             // default: no group
                ->navigationSort(30)
                ->navigationIcon('heroicon-o-clock')
                ->slug('data-retention'),
        ]);
}
```

All fluent methods are optional. The buttons run in the web request: keep `php artisan ccpa:retention` scheduled daily as the main way to apply retention, and use the panel to check and to act after a restore.

> The resource has no authorization of its own: register it only on panels whose users may erase personal data, or add a policy for `JeffersonGoncalves\CcpaRetention\Models\Tombstone`.

## Related plugins

- [filament-ccpa](https://github.com/jeffersongoncalves/filament-ccpa): personal data inventory, with each column's retention.
- [filament-ccpa-consent](https://github.com/jeffersongoncalves/filament-ccpa-consent): consent ledger.
- [filament-ccpa-requests](https://github.com/jeffersongoncalves/filament-ccpa-requests): consumer requests to know, delete and correct.

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

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
