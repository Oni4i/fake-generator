<?php

namespace Oni4i\FakeNzGenerator\Resource\PT;

use Oni4i\FakeNzGenerator\Resource\ResourceInterface;

final class CityResource implements ResourceInterface
{
    public static function extract(): array
    {
        return [
            "Lisbon",
            "Porto",
            "Coimbra",
            "Braga",
            "Faro",
            "Aveiro",
            "Leiria",
            "Évora",
            "Setúbal",
            "Viseu",
            "Guimarães",
            "Barreiro",
            "Almada",
            "Cascais",
            "Oeiras",
            "Sintra",
            "Amadora",
            "Vila Nova de Gaia",
            "Matosinhos",
            "Maia",
            "Vila Real",
            "Bragança",
            "Beja",
            "Santarém",
            "Ponta Delgada",
            "Funchal"
        ];
    }
}
