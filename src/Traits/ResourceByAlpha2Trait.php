<?php

namespace Oni4i\FakeNzGenerator\Traits;

trait ResourceByAlpha2Trait
{
    protected function getResourceNamespace(string $alpha2): string
    {
        return 'Oni4i\\FakeNzGenerator\\Resource\\' . strtoupper($alpha2);
    }
}
