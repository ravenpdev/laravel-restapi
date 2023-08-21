<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{
    public function __construct(
        protected Map $map,
        protected Satellite $satellite
    ) {
    }

    public function search(string $search)
    {
        $information = $this->map->findAddress($search);

        $location = $this->satellite->pinpoint($information);

        return $location;
        // return "Hello World";
    }
}
