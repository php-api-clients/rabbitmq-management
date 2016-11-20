<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyQueueTotals implements QueueTotalsInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function messages() : int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function messagesDetails() : Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesReady() : int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function messagesReadyDetails() : Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesUnacknowledged() : int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function messagesUnacknowledgedDetails() : Details
    {
        return null;
    }
}
