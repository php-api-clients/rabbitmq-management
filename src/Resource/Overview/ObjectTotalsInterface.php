<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ObjectTotalsInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function consumers(): int;

    /**
     * @return int
     */
    public function queues(): int;

    /**
     * @return int
     */
    public function exchanges(): int;

    /**
     * @return int
     */
    public function connections(): int;

    /**
     * @return int
     */
    public function channels(): int;
}
