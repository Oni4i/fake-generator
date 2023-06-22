<?php

namespace Oni4i\FakeNzGenerator\Service\City;

use Oni4i\FakeNzGenerator\Resource\CityResource;

class CityGeneratorService implements CityGeneratorServiceInterface
{
    public function rand(): string
    {
        $resource = CityResource::extract();

        return $resource[array_rand($resource)];
    }
}
