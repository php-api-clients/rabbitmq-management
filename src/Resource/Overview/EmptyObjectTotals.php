<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyObjectTotals implements ObjectTotalsInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function consumers(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function queues(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function exchanges(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function connections(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function channels(): int
    {
        return null;
    }
}
