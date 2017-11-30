<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface DetailsInterface extends ResourceInterface
{
    /**
     * @return float
     */
    public function rate(): float;
}
