<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CapabilitiesInterface extends ResourceInterface
{
    /**
     * @return bool
     */
    public function publisherConfirms() : bool;

    /**
     * @return bool
     */
    public function exchangeExchangeBindings() : bool;

    /**
     * @return bool
     */
    public function consumerCancelNotify() : bool;

    /**
     * @return bool
     */
    public function authenticationFailureClose() : bool;

    /**
     * @return bool
     */
    public function basicNack() : bool;

    /**
     * @return bool
     */
    public function connectionBlocked() : bool;
}
