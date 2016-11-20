<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MessageStatsInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function publish() : int;

    /**
     * @return Details
     */
    public function publishDetails() : Details;

    /**
     * @return int
     */
    public function confirm() : int;

    /**
     * @return Details
     */
    public function confirmDetails() : Details;
}
