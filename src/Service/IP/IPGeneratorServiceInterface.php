<?php

namespace Oni4i\FakeNzGenerator\Service\IP;

interface IPGeneratorServiceInterface
{
    const RESOURCE_NAME = 'IPResource';

    public function first(string $resourceAlpha2): string;
    public function next(string $lastIP, string $resourceAlpha2): string;
    public function prev(string $lastIP, string $resourceAlpha2): string;
    public function rand(string $resourceAlpha2): string;
}
