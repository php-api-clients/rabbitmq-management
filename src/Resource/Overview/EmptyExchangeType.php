<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyExchangeType implements ExchangeTypeInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function name() : string
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
     * @return bool
     */
    public function enabled() : bool
    {
        return null;
    }
}
