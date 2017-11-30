<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyDetails implements DetailsInterface, EmptyResourceInterface
{
    /**
     * @return float
     */
    public function rate(): float
    {
        return null;
    }
}
