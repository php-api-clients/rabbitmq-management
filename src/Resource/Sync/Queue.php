<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync;

use ApiClients\Client\RabbitMQ\Management\Resource\Queue as BaseQueue;

class Queue extends BaseQueue
{
    public function refresh(): Queue
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
