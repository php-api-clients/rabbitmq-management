<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\QueueTotals as BaseQueueTotals;

class QueueTotals extends BaseQueueTotals
{
    public function refresh(): QueueTotals
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
