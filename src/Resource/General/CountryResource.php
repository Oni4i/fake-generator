<?php

namespace Oni4i\FakeNzGenerator\Resource\General;

use Oni4i\FakeNzGenerator\Resource\ResourceInterface;

class CountryResource implements ResourceInterface
{
    public static function extract(): array
    {
        return [
            'NZ' => [
                'phonePrefix' => '+64',
                'alpha3' => 'NZL',
            ],
            'IT' => [
                'phonePrefix' => '+39',
                'alpha3' => 'ITA',
            ],
            'PT' => [
                'phonePrefix' => '+351',
                'alpha3' => 'PRT',
            ],
            'CH' => [
                'phonePrefix' => '+41',
                'alpha3' => 'CHE',
            ],
        ];
    }
}