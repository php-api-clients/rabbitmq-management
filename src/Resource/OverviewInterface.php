<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface OverviewInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function managementVersion() : string;

    /**
     * @return string
     */
    public function ratesMode() : string;

    /**
     * @return array
     */
    public function exchangeTypes() : array;

    /**
     * @return string
     */
    public function rabbitmqVersion() : string;

    /**
     * @return string
     */
    public function clusterName() : string;

    /**
     * @return string
     */
    public function erlangVersion() : string;

    /**
     * @return string
     */
    public function erlangFullVersion() : string;

    /**
     * @return MessageStats
     */
    public function messageStats() : MessageStats;

    /**
     * @return Overview\QueueTotals
     */
    public function queueTotals() : Overview\QueueTotals;

    /**
     * @return Overview\ObjectTotals
     */
    public function objectTotals() : Overview\ObjectTotals;

    /**
     * @return int
     */
    public function statisticsDbEventQueue() : int;

    /**
     * @return string
     */
    public function node() : string;

    /**
     * @return string
     */
    public function statisticsDbNode() : string;

    /**
     * @return array
     */
    public function listeners() : array;

    /**
     * @return array
     */
    public function contexts() : array;
}
