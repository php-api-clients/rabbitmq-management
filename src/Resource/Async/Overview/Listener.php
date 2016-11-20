<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Async\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\Listener as BaseListener;

class Listener extends BaseListener
{
    public function refresh() : Listener
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
