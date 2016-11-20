<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Async\Connection\ClientProperties;

use ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties\Capabilities as BaseCapabilities;

class Capabilities extends BaseCapabilities
{
    public function refresh() : Capabilities
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
