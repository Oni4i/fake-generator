<?php

namespace Oni4i\FakeNzGenerator\Service\Location;

use Oni4i\FakeNzGenerator\DTO\LocationDTO;
use Oni4i\FakeNzGenerator\Resource\General\CountryResource;
use Oni4i\FakeNzGenerator\Service\City\CityGeneratorService;
use Oni4i\FakeNzGenerator\Service\City\CityGeneratorServiceInterface;
use Oni4i\FakeNzGenerator\Service\Country\CountryGeneratorService;
use Oni4i\FakeNzGenerator\Service\Country\CountryGeneratorServiceInterface;
use Oni4i\FakeNzGenerator\Service\IP\IPGeneratorService;
use Oni4i\FakeNzGenerator\Service\IP\IPGeneratorServiceInterface;
use Oni4i\FakeNzGenerator\Service\Zip\ZipGeneratorService;
use Oni4i\FakeNzGenerator\Service\Zip\ZipGeneratorServiceInterface;

class LocationService implements LocationInterface
{
    private CountryGeneratorServiceInterface $countryGenerator;
    private CityGeneratorServiceInterface $cityGenerator;
    private ZipGeneratorServiceInterface $zipGenerator;
    private IPGeneratorServiceInterface $ipGenerator;

    public function __construct()
    {
        $this->countryGenerator = new CountryGeneratorService();
        $this->cityGenerator = new CityGeneratorService();
        $this->zipGenerator = new ZipGeneratorService();
        $this->ipGenerator = new IPGeneratorService();
    }

    public function randDTO(array $allowedAlpha2Countries = []): LocationDTO
    {
        $alpha2 = $this->countryGenerator->rand($allowedAlpha2Countries);

        $countryResource = CountryResource::extract()[$alpha2];
        $city = $this->cityGenerator->rand($alpha2);
        $zip = $this->zipGenerator->randByCity($city, $alpha2);
        $ip = $this->ipGenerator->rand($alpha2);

        return new LocationDTO(
            $alpha2,
            $countryResource['alpha3'],
            $countryResource['phonePrefix'],
            $city,
            $zip,
            $ip
        );
    }
}
