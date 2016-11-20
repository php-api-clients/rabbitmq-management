<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Async\Queue;

use ApiClients\Client\RabbitMQ\Management\Resource\Queue\BackingQueueStatus as BaseBackingQueueStatus;

class BackingQueueStatus extends BaseBackingQueueStatus
{
    public function refresh() : BackingQueueStatus
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
