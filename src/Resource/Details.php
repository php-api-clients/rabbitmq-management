<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyDetails")
 */
abstract class Details extends AbstractResource implements DetailsInterface
{
    /**
     * @var float
     */
    protected $rate;

    /**
     * @return float
     */
    public function rate(): float
    {
        return $this->rate;
    }
}
