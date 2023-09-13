<?php

namespace Andach\LaravelPrimaryKeyUuid\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Andach\LaravelPrimaryKeyUuid\LaravelPrimaryKeyUuidServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Andach\\LaravelPrimaryKeyUuid\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelPrimaryKeyUuidServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-primary-key-uuid_table.php.stub';
        $migration->up();
        */
    }
}
