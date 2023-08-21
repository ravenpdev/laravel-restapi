<?php

namespace App;

use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;

class Playground
{
    public function __construct(Geolocation $geolocation)
    {
        // Facade
        // Think of facade as a static counter part of the main class
        // GeolocationFacade::search();
        //
        $result = GeolocationFacade::search('a');

        dump($result);
    }
}
