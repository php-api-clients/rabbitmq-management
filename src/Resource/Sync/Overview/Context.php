<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\Context as BaseContext;

class Context extends BaseContext
{
    public function refresh(): Context
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
