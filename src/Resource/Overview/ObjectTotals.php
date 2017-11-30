<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Overview\EmptyObjectTotals")
 */
abstract class ObjectTotals extends AbstractResource implements ObjectTotalsInterface
{
    /**
     * @var int
     */
    protected $consumers;

    /**
     * @var int
     */
    protected $queues;

    /**
     * @var int
     */
    protected $exchanges;

    /**
     * @var int
     */
    protected $connections;

    /**
     * @var int
     */
    protected $channels;

    /**
     * @return int
     */
    public function consumers(): int
    {
        return $this->consumers;
    }

    /**
     * @return int
     */
    public function queues(): int
    {
        return $this->queues;
    }

    /**
     * @return int
     */
    public function exchanges(): int
    {
        return $this->exchanges;
    }

    /**
     * @return int
     */
    public function connections(): int
    {
        return $this->connections;
    }

    /**
     * @return int
     */
    public function channels(): int
    {
        return $this->channels;
    }
}
