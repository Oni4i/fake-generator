<?php

namespace Oni4i\FakeNzGenerator\DTO;

interface LocationInterface
{
    public function getCity(): string;
    public function getPhonePrefix(): string;
    public function getCountryAlpha3(): string;
    public function getCountryAlpha2(): string;
    public function getIp(): string;
}
