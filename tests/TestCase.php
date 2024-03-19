<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Raiolanetworks\Atlas\AtlasServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            AtlasServiceProvider::class,
        ];
    }
}
