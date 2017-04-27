<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Connection\ClientProperties;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Rename;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Rename(
 *     basic_nack="basic.nack",
 *     connection_blocked="connection.blocked"
 * )
 * @EmptyResource("Connection\ClientProperties\EmptyCapabilities")
 */
abstract class Capabilities extends AbstractResource implements CapabilitiesInterface
{
    /**
     * @var bool
     */
    protected $publisher_confirms;

    /**
     * @var bool
     */
    protected $exchange_exchange_bindings;

    /**
     * @var bool
     */
    protected $consumer_cancel_notify;

    /**
     * @var bool
     */
    protected $authentication_failure_close;

    /**
     * @var bool
     */
    protected $basic_nack;

    /**
     * @var bool
     */
    protected $connection_blocked;

    /**
     * @return bool
     */
    public function publisherConfirms() : bool
    {
        return $this->publisher_confirms;
    }

    /**
     * @return bool
     */
    public function exchangeExchangeBindings() : bool
    {
        return $this->exchange_exchange_bindings;
    }

    /**
     * @return bool
     */
    public function consumerCancelNotify() : bool
    {
        return $this->consumer_cancel_notify;
    }

    /**
     * @return bool
     */
    public function authenticationFailureClose() : bool
    {
        return $this->authentication_failure_close;
    }

    /**
     * @return bool
     */
    public function basicNack() : bool
    {
        return $this->basic_nack;
    }

    /**
     * @return bool
     */
    public function connectionBlocked() : bool
    {
        return $this->connection_blocked;
    }
}
