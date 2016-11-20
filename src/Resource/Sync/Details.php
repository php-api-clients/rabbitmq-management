<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Sync;

use ApiClients\Client\RabbitMQ\Management\Resource\Details as BaseDetails;

class Details extends BaseDetails
{
    public function refresh() : Details
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
