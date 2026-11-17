<?php

namespace JeffersonGoncalves\Filament\CcpaRetention;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaRetentionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-retention')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
