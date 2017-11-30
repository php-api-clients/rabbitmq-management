<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Overview\Listener;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class ListenerTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Listener::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
