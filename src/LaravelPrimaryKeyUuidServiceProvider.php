<?php

namespace Andach\LaravelPrimaryKeyUuid;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Andach\LaravelPrimaryKeyUuid\Commands\LaravelPrimaryKeyUuidCommand;

class LaravelPrimaryKeyUuidServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-primary-key-uuid')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-primary-key-uuid_table')
            ->hasCommand(LaravelPrimaryKeyUuidCommand::class);
    }
}
