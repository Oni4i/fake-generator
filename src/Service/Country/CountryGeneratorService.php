<?php

namespace Oni4i\FakeNzGenerator\Service\Country;

use Oni4i\FakeNzGenerator\Resource\General\CountryResource;

class CountryGeneratorService implements CountryGeneratorServiceInterface
{
    public function rand(array $allowedAlpha2Countries = []): string
    {
        $resource = array_keys(CountryResource::extract());

        if (!$allowedAlpha2Countries) {
            return array_rand($resource);
        }

        $allowedAlpha2Countries = array_map('strtoupper', $allowedAlpha2Countries);

        $intersectAlpha2Countries = array_intersect($resource, $allowedAlpha2Countries);

        if (!$intersectAlpha2Countries) {
            throw new \RuntimeException('All allowed countries do not support');
        }

        return $intersectAlpha2Countries[array_rand($intersectAlpha2Countries)];
    }
}
