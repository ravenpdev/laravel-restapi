<?php

namespace App\Services\Geolocation;

use Illuminate\Support\Facades\Facade;

/**
 * Facade allows us to call Service Instance method statically, providing us a convenient way to call Service method.
 *
 * @method static array search(string search)
 *
 * {@see \App\Services\Geolocation\Geolocation}
 */
class GeolocationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Geolocation::class;
    }
}
