<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Overview\EmptyListener")
 */
abstract class Listener extends AbstractResource implements ListenerInterface
{
    /**
     * @var string
     */
    protected $node;

    /**
     * @var string
     */
    protected $protocol;

    /**
     * @var string
     */
    protected $ip_address;

    /**
     * @var int
     */
    protected $port;

    /**
     * @return string
     */
    public function node(): string
    {
        return $this->node;
    }

    /**
     * @return string
     */
    public function protocol(): string
    {
        return $this->protocol;
    }

    /**
     * @return string
     */
    public function ipAddress(): string
    {
        return $this->ip_address;
    }

    /**
     * @return int
     */
    public function port(): int
    {
        return $this->port;
    }
}
