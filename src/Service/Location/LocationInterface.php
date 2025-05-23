<?php

namespace Oni4i\FakeNzGenerator\Service\Location;

use Oni4i\FakeNzGenerator\DTO\LocationDTO;

interface LocationInterface
{
    public function randDTO(array $allowedAlpha2Countries = []): LocationDTO;
}
