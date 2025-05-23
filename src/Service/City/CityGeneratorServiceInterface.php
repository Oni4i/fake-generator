<?php

namespace Oni4i\FakeNzGenerator\Service\City;

interface CityGeneratorServiceInterface
{
    const RESOURCE_NAME = 'CityResource';

    public function rand(string $resourceAlpha2): string;
}
