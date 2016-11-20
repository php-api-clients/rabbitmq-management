<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync;

use ApiClients\Client\RabbitMQ\Management\Resource\Connection as BaseConnection;

class Connection extends BaseConnection
{
    public function refresh() : Connection
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
