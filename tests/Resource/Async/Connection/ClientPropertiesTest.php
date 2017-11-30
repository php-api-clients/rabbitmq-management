<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async\Connection;

use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class ClientPropertiesTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return ClientProperties::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
