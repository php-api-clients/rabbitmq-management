<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use ApiClients\Client\RabbitMQ\Management\Resource\OverviewInterface;
use function Clue\React\Block\await;
use function React\Promise\resolve;

interface ClientInterface
{
    /**
     * @return OverviewInterface
     */
    public function overview(): OverviewInterface;

    /**
     * @return array
     */
    public function queues(): array;

    /**
     * @return array
     */
    public function connections(): array;
}
