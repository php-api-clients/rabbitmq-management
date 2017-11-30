<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\ResourceInterface;

interface QueueTotalsInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function messages(): int;

    /**
     * @return Details
     */
    public function messagesDetails(): Details;

    /**
     * @return int
     */
    public function messagesReady(): int;

    /**
     * @return Details
     */
    public function messagesReadyDetails(): Details;

    /**
     * @return int
     */
    public function messagesUnacknowledged(): int;

    /**
     * @return Details
     */
    public function messagesUnacknowledgedDetails(): Details;
}
