<?php

namespace Oni4i\FakeNzGenerator\Service\Zip;

use Oni4i\FakeNzGenerator\Resource\ZipCodeResource;

class ZipGeneratorService implements ZipGeneratorServiceInterface
{
    public function rand(): string
    {
        $resource = ZipCodeResource::extract();

        $cityZipCodes = $resource[array_rand($resource)];

        return $cityZipCodes[array_rand($cityZipCodes)];
    }

    public function randByCity(string $city): string
    {
        $resource = ZipCodeResource::extract();

        $cityZipCodes = $resource[$city] ?? null;

        if (!$cityZipCodes) {
            throw new \RuntimeException('City not found');
        }

        return $cityZipCodes[array_rand($cityZipCodes)];
    }
}
