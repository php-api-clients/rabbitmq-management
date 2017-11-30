<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\ExchangeType as BaseExchangeType;

class ExchangeType extends BaseExchangeType
{
    public function refresh(): ExchangeType
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
