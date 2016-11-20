<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCapabilities implements CapabilitiesInterface, EmptyResourceInterface
{
    /**
     * @return bool
     */
    public function publisherConfirms() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function exchangeExchangeBindings() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function consumerCancelNotify() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function authenticationFailureClose() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function basicNack() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function connectionBlocked() : bool
    {
        return null;
    }
}
