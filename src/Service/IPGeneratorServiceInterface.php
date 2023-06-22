<?php

namespace Oni4i\FakeNzGenerator\Service;

interface IPGeneratorServiceInterface
{
    public function first(): string;
    public function next(string $lastIP): string;
    public function prev(string $lastIP): string;
}
