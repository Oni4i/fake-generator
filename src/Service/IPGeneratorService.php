<?php

namespace Oni4i\FakeNzGenerator\Service;

use Oni4i\FakeNzGenerator\Resource\IPResource;

class IPGeneratorService implements IPGeneratorServiceInterface
{
    public function first(): string
    {
        return IPResource::extract()[0][0];
    }

    public function next(string $lastIP): string
    {
        $lastIPLong = ip2long($lastIP);
        [$key, $range] = $this->findIPRange($lastIPLong);

        $nextIPLong = $lastIPLong + 1;

        if ($nextIPLong > ip2long($range[1])) {
            $ips = IPResource::extract();

            if (count($ips) - 1 === $key) {
                throw new \RuntimeException('Out of range');
            }

            $nextIPLong = ip2long([$key + 1][0]);
        }

        return long2ip($nextIPLong);
    }

    public function prev(string $lastIP): string
    {
        $lastIPLong = ip2long($lastIP);
        [$key, $range] = $this->findIPRange($lastIPLong);

        $prevIPLong = $lastIPLong - 1;

        if ($prevIPLong < ip2long($range[0])) {

            if ($key <= 0) {
                throw new \RuntimeException('Out of range');
            }

            $prevIPLong = ip2long(IPResource::extract()[$key - 1][1]);
        }

        return long2ip($prevIPLong);
    }

    private function findIPRange(int $ipLong): array
    {
        $ipRanges = IPResource::extract();

        foreach ($ipRanges as $key => $range) {
            [$start, $end] = $range;

            if (ip2long($start) <= $ipLong && $ipLong <= ip2long($end)) {
                return [$key, $range];
            }
        }

        throw new \RuntimeException('IP: ' . long2ip($ipLong) . ' is not in IP New Zealand list');
    }
}
