<?php

namespace JeffersonGoncalves\Filament\CcpaRetention;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaRetentionServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-retention';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
