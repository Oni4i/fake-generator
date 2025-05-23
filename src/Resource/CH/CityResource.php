<?php

namespace Oni4i\FakeNzGenerator\Resource\CH;

use Oni4i\FakeNzGenerator\Resource\ResourceInterface;

class CityResource implements ResourceInterface
{
    public static function extract(): array
    {
        return [
            "Zurich",
            "Geneva",
            "Basel",
            "Bern",
            "Lausanne",
            "Lucerne",
            "Winterthur",
            "St. Gallen",
            "Lugano",
            "Biel/Bienne",
            "Thun",
            "La Chaux-de-Fonds",
            "Köniz",
            "Schaffhausen",
            "Fribourg",
            "Chur",
            "Neuchâtel",
            "Sion",
            "Uster",
            "Zug"
        ];
    }
}