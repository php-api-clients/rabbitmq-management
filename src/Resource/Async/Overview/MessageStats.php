<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Async\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\MessageStats as BaseMessageStats;

class MessageStats extends BaseMessageStats
{
    public function refresh() : MessageStats
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
