<?php

namespace Oni4i\FakeNzGenerator\Service\IP;

use Oni4i\FakeNzGenerator\Service\RandomGeneratorInterface;

interface IPGeneratorServiceInterface extends RandomGeneratorInterface
{
    public function first(): string;
    public function next(string $lastIP): string;
    public function prev(string $lastIP): string;
    public function rand(): string;
}
