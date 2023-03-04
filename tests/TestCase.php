<?php

namespace MMTE\MyTestPackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MMTE\MyTestPackage\MyTestPackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MMTE\\MyTestPackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MyTestPackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_my-test-package_table.php.stub';
        $migration->up();
        */
    }
}
