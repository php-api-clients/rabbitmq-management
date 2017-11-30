<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ContextInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function node(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return string
     */
    public function path(): string;

    /**
     * @return string
     */
    public function port(): string;
}
