<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview\ObjectTotals as BaseObjectTotals;

class ObjectTotals extends BaseObjectTotals
{
    public function refresh() : ObjectTotals
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
