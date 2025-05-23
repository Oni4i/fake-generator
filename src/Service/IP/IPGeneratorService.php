<?php

namespace Oni4i\FakeNzGenerator\Service\IP;

use Oni4i\FakeNzGenerator\Resource\NZ\IPResource;
use Oni4i\FakeNzGenerator\Traits\ResourceByAlpha2Trait;

class IPGeneratorService implements IPGeneratorServiceInterface
{
    use ResourceByAlpha2Trait;

    public function first(string $resourceAlpha2): string
    {
        return $this->getIpResource($resourceAlpha2)[0][0];
    }

    public function next(string $lastIP, string $resourceAlpha2): string
    {
        $lastIPLong = ip2long($lastIP);
        [$key, $range] = $this->findIPRange($lastIPLong, $resourceAlpha2);

        $nextIPLong = $lastIPLong + 1;

        if ($nextIPLong > ip2long($range[1])) {
            $ips = IPResource::extract();

            if (count($ips) - 1 === $key) {
                throw new \RuntimeException('Out of range');
            }

            $nextIPLong = ip2long($ips[$key + 1][0]);
        }

        return long2ip($nextIPLong);
    }

    public function prev(string $lastIP, string $resourceAlpha2): string
    {
        $lastIPLong = ip2long($lastIP);
        [$key, $range] = $this->findIPRange($lastIPLong, $resourceAlpha2);

        $prevIPLong = $lastIPLong - 1;

        if ($prevIPLong < ip2long($range[0])) {

            if ($key <= 0) {
                throw new \RuntimeException('Out of range');
            }

            $prevIPLong = ip2long(IPResource::extract()[$key - 1][1]);
        }

        return long2ip($prevIPLong);
    }

    public function rand(string $resourceAlpha2): string
    {
        $resource = $this->getIpResource($resourceAlpha2);

        $range = $resource[array_rand($resource)];

        $start = ip2long($range[0]);
        $end = ip2long($range[1]);

        return long2ip(rand($start, $end));
    }

    private function findIPRange(int $ipLong, string $resourceAlpha2): array
    {
        $ipRanges = $this->getIpResource($resourceAlpha2);

        foreach ($ipRanges as $key => $range) {
            [$start, $end] = $range;

            if (ip2long($start) <= $ipLong && $ipLong <= ip2long($end)) {
                return [$key, $range];
            }
        }

        throw new \RuntimeException('IP: ' . long2ip($ipLong) . ' is not in IP list');
    }

    private function getIpResource(string $resourceAlpha2): array
    {
        $resourceNamespace = $this->getResourceNamespace($resourceAlpha2);
        $ipResource = $resourceNamespace . '\\' . self::RESOURCE_NAME;

        if (!class_exists($ipResource)) {
            throw new \RuntimeException('Resource does not exist');
        }

        return $ipResource::extract();
    }
}
