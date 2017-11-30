<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ListenerInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function node(): string;

    /**
     * @return string
     */
    public function protocol(): string;

    /**
     * @return string
     */
    public function ipAddress(): string;

    /**
     * @return int
     */
    public function port(): int;
}
