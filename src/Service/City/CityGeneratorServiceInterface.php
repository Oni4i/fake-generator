<?php

namespace Oni4i\FakeNzGenerator\Service\City;

use Oni4i\FakeNzGenerator\Service\RandomGeneratorInterface;

interface CityGeneratorServiceInterface extends RandomGeneratorInterface
{
    public function rand(): string;
}
