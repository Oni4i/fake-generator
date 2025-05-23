<?php

namespace Oni4i\FakeNzGenerator\Service\Zip;

interface ZipGeneratorServiceInterface
{
    const RESOURCE_NAME = 'ZipCodeResource';

    public function randByCity(string $city, string $resourceAlpha2): string;
}
