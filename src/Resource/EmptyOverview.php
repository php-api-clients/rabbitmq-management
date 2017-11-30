<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyOverview implements OverviewInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function managementVersion(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function ratesMode(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function exchangeTypes(): array
    {
        return null;
    }

    /**
     * @return string
     */
    public function rabbitmqVersion(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function clusterName(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function erlangVersion(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function erlangFullVersion(): string
    {
        return null;
    }

    /**
     * @return MessageStats
     */
    public function messageStats(): MessageStats
    {
        return null;
    }

    /**
     * @return Overview\QueueTotals
     */
    public function queueTotals(): Overview\QueueTotals
    {
        return null;
    }

    /**
     * @return Overview\ObjectTotals
     */
    public function objectTotals(): Overview\ObjectTotals
    {
        return null;
    }

    /**
     * @return int
     */
    public function statisticsDbEventQueue(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function node(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function statisticsDbNode(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function listeners(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function contexts(): array
    {
        return null;
    }
}
