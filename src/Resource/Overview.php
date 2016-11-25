<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Hydrator\Annotations\Collection;
use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     exchange_types="Overview\ExchangeType",
 *     listeners="Overview\Listener",
 *     contexts="Overview\Context"
 * )
 * @Nested(
 *     message_stats="MessageStats",
 *     queue_totals="Overview\QueueTotals",
 *     object_totals="Overview\ObjectTotals"
 * )
 * @EmptyResource("EmptyOverview")
 */
abstract class Overview extends AbstractResource implements OverviewInterface
{
    /**
     * @var string
     */
    protected $management_version;

    /**
     * @var string
     */
    protected $rates_mode;

    /**
     * @var array
     */
    protected $exchange_types;

    /**
     * @var string
     */
    protected $rabbitmq_version;

    /**
     * @var string
     */
    protected $cluster_name;

    /**
     * @var string
     */
    protected $erlang_version;

    /**
     * @var string
     */
    protected $erlang_full_version;

    /**
     * @var MessageStats
     */
    protected $message_stats;

    /**
     * @var Overview\QueueTotals
     */
    protected $queue_totals;

    /**
     * @var Overview\ObjectTotals
     */
    protected $object_totals;

    /**
     * @var int
     */
    protected $statistics_db_event_queue;

    /**
     * @var string
     */
    protected $node;

    /**
     * @var string
     */
    protected $statistics_db_node;

    /**
     * @var array
     */
    protected $listeners;

    /**
     * @var array
     */
    protected $contexts;

    /**
     * @return string
     */
    public function managementVersion() : string
    {
        return $this->management_version;
    }

    /**
     * @return string
     */
    public function ratesMode() : string
    {
        return $this->rates_mode;
    }

    /**
     * @return array
     */
    public function exchangeTypes() : array
    {
        return $this->exchange_types;
    }

    /**
     * @return string
     */
    public function rabbitmqVersion() : string
    {
        return $this->rabbitmq_version;
    }

    /**
     * @return string
     */
    public function clusterName() : string
    {
        return $this->cluster_name;
    }

    /**
     * @return string
     */
    public function erlangVersion() : string
    {
        return $this->erlang_version;
    }

    /**
     * @return string
     */
    public function erlangFullVersion() : string
    {
        return $this->erlang_full_version;
    }

    /**
     * @return MessageStats
     */
    public function messageStats() : MessageStats
    {
        return $this->message_stats;
    }

    /**
     * @return Overview\QueueTotals
     */
    public function queueTotals() : Overview\QueueTotals
    {
        return $this->queue_totals;
    }

    /**
     * @return Overview\ObjectTotals
     */
    public function objectTotals() : Overview\ObjectTotals
    {
        return $this->object_totals;
    }

    /**
     * @return int
     */
    public function statisticsDbEventQueue() : int
    {
        return $this->statistics_db_event_queue;
    }

    /**
     * @return string
     */
    public function node() : string
    {
        return $this->node;
    }

    /**
     * @return string
     */
    public function statisticsDbNode() : string
    {
        return $this->statistics_db_node;
    }

    /**
     * @return array
     */
    public function listeners() : array
    {
        return $this->listeners;
    }

    /**
     * @return array
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
