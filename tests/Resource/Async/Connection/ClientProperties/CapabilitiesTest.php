<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async\Connection\ClientProperties;

use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties\Capabilities;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class CapabilitiesTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Capabilities::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
