<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Overview\EmptyContext")
 */
abstract class Context extends AbstractResource implements ContextInterface
{
    /**
     * @var string
     */
    protected $node;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $port;

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
    public function description() : string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function path() : string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function port() : string
    {
        return $this->port;
    }
}
