<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MessageStatsInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function deliver(): int;

    /**
     * @return Details
     */
    public function deliverDetails(): Details;

    /**
     * @return int
     */
    public function deliverNoAck(): int;

    /**
     * @return Details
     */
    public function deliverNoAckDetails(): Details;

    /**
     * @return int
     */
    public function get(): int;

    /**
     * @return Details
     */
    public function getDetails(): Details;

    /**
     * @return int
     */
    public function getNoAck(): int;

    /**
     * @return Details
     */
    public function getNoAckDetails(): Details;

    /**
     * @return int
     */
    public function publish(): int;

    /**
     * @return Details
     */
    public function publishDetails(): Details;

    /**
     * @return int
     */
    public function publishIn(): int;

    /**
     * @return Details
     */
    public function publishInDetails(): Details;

    /**
     * @return int
     */
    public function publishOut(): int;

    /**
     * @return Details
     */
    public function publishOutDetails(): Details;

    /**
     * @return int
     */
    public function ack(): int;

    /**
     * @return Details
     */
    public function ackDetails(): Details;

    /**
     * @return int
     */
    public function deliverGet(): int;

    /**
     * @return Details
     */
    public function deliverGetDetails(): Details;

    /**
     * @return int
     */
    public function confirm(): int;

    /**
     * @return Details
     */
    public function confirmDetails(): Details;

    /**
     * @return int
     */
    public function returnUnroutable(): int;

    /**
     * @return Details
     */
    public function returnUnroutableDetails(): Details;

    /**
     * @return int
     */
    public function redeliver(): int;

    /**
     * @return Details
     */
    public function redeliverDetails(): Details;
}
