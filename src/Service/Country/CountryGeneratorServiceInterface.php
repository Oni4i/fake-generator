<?php

namespace Oni4i\FakeNzGenerator\Service\Country;

interface CountryGeneratorServiceInterface
{
    /**
     * @param array<string> $allowedAlpha2Countries
     */
    public function rand(array $allowedAlpha2Countries = []): string;
}
