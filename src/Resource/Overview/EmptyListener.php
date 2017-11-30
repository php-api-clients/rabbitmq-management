<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyListener implements ListenerInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function node(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function protocol(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function ipAddress(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function port(): int
    {
        return null;
    }
}
