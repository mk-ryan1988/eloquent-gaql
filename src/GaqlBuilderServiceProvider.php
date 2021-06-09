<?php

namespace MkRyan1988\GaqlBuilder;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GaqlBuilderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('eloquent-gaql');
    }

    public function register()
    {
        $this->app->bind('calculator', function() {
            return new GaqlBuilderFacade();
        });
    }
}
