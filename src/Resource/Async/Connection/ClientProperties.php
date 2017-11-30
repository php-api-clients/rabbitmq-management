<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Async\Connection;

use ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties as BaseClientProperties;

class ClientProperties extends BaseClientProperties
{
    public function refresh(): ClientProperties
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
