<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Raiolanetworks\Atlas\Atlas
 */
class Atlas extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Raiolanetworks\Atlas\Atlas::class;
    }
}
