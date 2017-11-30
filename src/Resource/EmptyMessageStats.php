<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMessageStats implements MessageStatsInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function deliver(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function deliverDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function deliverNoAck(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function deliverNoAckDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function get(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function getDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function getNoAck(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function getNoAckDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function publish(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function publishDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function publishIn(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function publishInDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function publishOut(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function publishOutDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function ack(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function ackDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function deliverGet(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function deliverGetDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function confirm(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function confirmDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function returnUnroutable(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function returnUnroutableDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function redeliver(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function redeliverDetails(): Details
    {
        return null;
    }
}
