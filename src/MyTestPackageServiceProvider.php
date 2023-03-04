<?php

namespace MMTE\MyTestPackage;

use MMTE\MyTestPackage\Commands\MyTestPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MyTestPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('my-test-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my-test-package_table')
            ->hasCommand(MyTestPackageCommand::class);
    }
}
