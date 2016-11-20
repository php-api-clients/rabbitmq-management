<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyContext implements ContextInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function node() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function path() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function port() : string
    {
        return null;
    }
}
