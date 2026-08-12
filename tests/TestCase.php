<?php

declare(strict_types=1);

namespace JonPurvis\Uninspire\Tests;

use JonPurvis\Uninspire\Providers\UninspireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            UninspireServiceProvider::class,
        ];
    }
}
