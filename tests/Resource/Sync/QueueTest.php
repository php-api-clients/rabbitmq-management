<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Sync;

use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Queue;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class QueueTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Queue::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
