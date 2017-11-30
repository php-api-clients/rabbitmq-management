<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\Listener as BaseListener;

class Listener extends BaseListener
{
    public function refresh(): Listener
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
