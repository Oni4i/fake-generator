<?php

namespace Oni4i\FakeNzGenerator\Resource\CH;

use Oni4i\FakeNzGenerator\Resource\ResourceInterface;

class ZipCodeResource implements ResourceInterface
{
    public static function extract(): array
    {
        return [
            "Zurich" => [
                "8000",
                "8001",
                "8002"
            ],
            "Geneva" => [
                "1200",
                "1201",
                "1202"
            ],
            "Basel" => [
                "4000",
                "4001",
                "4002"
            ],
            "Bern" => [
                "3000",
                "3001",
                "3002"
            ],
            "Lausanne" => [
                "1000",
                "1001",
                "1002"
            ],
            "Lucerne" => [
                "6000",
                "6001",
                "6002"
            ],
            "Winterthur" => [
                "8400",
                "8401",
                "8402"
            ],
            "St. Gallen" => [
                "9000",
                "9001",
                "9002"
            ],
            "Lugano" => [
                "6900",
                "6901",
                "6902"
            ],
            "Biel/Bienne" => [
                "2500",
                "2501",
                "2502"
            ],
            "Thun" => [
                "3600",
                "3601",
                "3602"
            ],
            "La Chaux-de-Fonds" => [
                "2300",
                "2301",
                "2302"
            ],
            "Köniz" => [
                "3098",
                "3099"
            ],
            "Schaffhausen" => [
                "8200",
                "8201",
                "8202"
            ],
            "Fribourg" => [
                "1700",
                "1701",
                "1702"
            ],
            "Chur" => [
                "7000",
                "7001",
                "7002"
            ],
            "Neuchâtel" => [
                "2000",
                "2001",
                "2002"
            ],
            "Sion" => [
                "1950",
                "1951",
                "1952"
            ],
            "Uster" => [
                "8610",
                "8611"
            ],
            "Zug" => [
                "6300",
                "6301",
                "6302"
            ]
        ];
    }
}