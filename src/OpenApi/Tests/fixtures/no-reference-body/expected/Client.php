<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected;

use Jane\OpenApiRuntime\Client\Resource;
use Jane\OpenApi\Tests\Expected\Resource\DefaultResourceTrait;

class Client extends Resource
{
    use DefaultResourceTrait;

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            try {
                $httpClient = \Http\Discovery\HttpAsyncClientDiscovery::find();
            } catch (\Http\Discovery\NotFoundException $e) {
                $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            }
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Jane\OpenApi\Tests\Expected\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new self($httpClient, $messageFactory, $serializer);
    }
}
