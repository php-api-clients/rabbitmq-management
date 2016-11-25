<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync;

use ApiClients\Client\RabbitMQ\Management\Resource\MessageStats as BaseMessageStats;

class MessageStats extends BaseMessageStats
{
    public function refresh() : MessageStats
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
