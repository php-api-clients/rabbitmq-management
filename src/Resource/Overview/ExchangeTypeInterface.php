<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ExchangeTypeInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return bool
     */
    public function enabled(): bool;
}
