<?php

namespace Oni4i\FakeNzGenerator\Service\Zip;

use Oni4i\FakeNzGenerator\Traits\ResourceByAlpha2Trait;

class ZipGeneratorService implements ZipGeneratorServiceInterface
{
    use ResourceByAlpha2Trait;

    public function randByCity(string $city, string $resourceAlpha2): string
    {
        $resourceNamespace = $this->getResourceNamespace($resourceAlpha2);
        $zipResource = $resourceNamespace . '\\' . self::RESOURCE_NAME;

        if (!class_exists($zipResource)) {
            throw new \RuntimeException('Resource does not exist');
        }

        $resource = $zipResource::extract();

        $cityZipCodes = $resource[$city] ?? null;

        if (!$cityZipCodes) {
            throw new \RuntimeException('City not found');
        }

        return $cityZipCodes[array_rand($cityZipCodes)];
    }
}
