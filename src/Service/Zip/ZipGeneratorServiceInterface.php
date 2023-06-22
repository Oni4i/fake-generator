<?php

namespace Oni4i\FakeNzGenerator\Service\Zip;

use Oni4i\FakeNzGenerator\Service\RandomGeneratorInterface;

interface ZipGeneratorServiceInterface extends RandomGeneratorInterface
{
    public function rand(): string;
    public function randByCity(string $city): string;
}
