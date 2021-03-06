<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Sync\Queue;

use ApiClients\Client\RabbitMQ\Management\Resource\Sync\Queue\EmptyBackingQueueStatus;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyBackingQueueStatusTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyBackingQueueStatus::class;
    }
}
