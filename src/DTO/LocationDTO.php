<?php

namespace Oni4i\FakeNzGenerator\DTO;

class LocationDTO implements LocationInterface
{
    private string $alpha2;
    private string $phonePrefix;
    private string $alpha3;
    private string $city;
    private string $zip;
    private string $ip;

    public function __construct(
        string $alpha2,
        string $alpha3,
        string $phonePrefix,
        string $city,
        string $zip,
        string $ip
    ) {
        $this->alpha2 = $alpha2;
        $this->alpha3 = $alpha3;
        $this->phonePrefix = $phonePrefix;
        $this->city = $city;
        $this->zip = $zip;
        $this->ip = $ip;
    }

    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    public function getPhonePrefix(): string
    {
        return $this->phonePrefix;
    }

    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getCountryAlpha3(): string
    {
        return $this->alpha3;
    }

    public function getCountryAlpha2(): string
    {
        return $this->alpha2;
    }
}
