<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas;

use Illuminate\Support\Facades\Facade;

class Atlas extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'atlas';
    }
}
