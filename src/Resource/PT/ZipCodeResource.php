<?php

namespace Oni4i\FakeNzGenerator\Resource\PT;

use Oni4i\FakeNzGenerator\Resource\ResourceInterface;

final class ZipCodeResource implements ResourceInterface
{
    public static function extract(): array
    {
        return [
            "Lisbon" => [
                "1000-001",
                "1000-002",
                "1000-003"
            ],
            "Porto" => [
                "4000-001",
                "4000-002",
                "4000-003"
            ],
            "Coimbra" => [
                "3000-001",
                "3000-002"
            ],
            "Braga" => [
                "4700-001",
                "4700-002"
            ],
            "Faro" => [
                "8000-001",
                "8000-002"
            ],
            "Aveiro" => [
                "3800-001",
                "3800-002"
            ],
            "Leiria" => [
                "2400-001",
                "2400-002"
            ],
            "Évora" => [
                "7000-001",
                "7000-002"
            ],
            "Setúbal" => [
                "2900-001",
                "2900-002"
            ],
            "Viseu" => [
                "3500-001",
                "3500-002"
            ],
            "Guimarães" => [
                "4810-001",
                "4810-002"
            ],
            "Barreiro" => [
                "2830-001",
                "2830-002"
            ],
            "Almada" => [
                "2800-001",
                "2800-002"
            ],
            "Cascais" => [
                "2750-001",
                "2750-002"
            ],
            "Oeiras" => [
                "2780-001",
                "2780-002"
            ],
            "Sintra" => [
                "2710-001",
                "2710-002"
            ],
            "Amadora" => [
                "2700-001",
                "2700-002"
            ],
            "Vila Nova de Gaia" => [
                "4400-001",
                "4400-002"
            ],
            "Matosinhos" => [
                "4450-001",
                "4450-002"
            ],
            "Maia" => [
                "4470-001",
                "4470-002"
            ],
            "Vila Real" => [
                "5000-001",
                "5000-002"
            ],
            "Bragança" => [
                "5300-001",
                "5300-002"
            ],
            "Beja" => [
                "7800-001",
                "7800-002"
            ],
            "Santarém" => [
                "2000-001",
                "2000-002"
            ],
            "Ponta Delgada" => [
                "9500-001",
                "9500-002"
            ],
            "Funchal" => [
                "9000-001",
                "9000-002"
            ]
        ];
    }
}
