<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Async;

use ApiClients\Client\RabbitMQ\Management\Resource\Overview as BaseOverview;

class Overview extends BaseOverview
{
    public function refresh() : Overview
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
