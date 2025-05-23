<?php

namespace Oni4i\FakeNzGenerator\Service\City;

use Oni4i\FakeNzGenerator\Traits\ResourceByAlpha2Trait;

class CityGeneratorService implements CityGeneratorServiceInterface
{
    use ResourceByAlpha2Trait;

    public function rand(string $resourceAlpha2): string
    {
        $resourceNamespace = $this->getResourceNamespace($resourceAlpha2);
        $cityResource = $resourceNamespace . '\\' . self::RESOURCE_NAME;

        if (!class_exists($cityResource)) {
            throw new \RuntimeException('Resource does not exist');
        }

        $resource = $cityResource::extract();

        return $resource[array_rand($resource)];
    }
}
