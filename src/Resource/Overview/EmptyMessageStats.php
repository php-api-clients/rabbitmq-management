<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMessageStats implements MessageStatsInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function publish() : int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function publishDetails() : Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function confirm() : int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function confirmDetails() : Details
    {
        return null;
    }
}
