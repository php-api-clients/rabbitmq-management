<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     publish_details="Details",
 *     confirm_details="Details"
 * )
 * @EmptyResource("Overview\EmptyMessageStats")
 */
abstract class MessageStats extends AbstractResource implements MessageStatsInterface
{
    /**
     * @var int
     */
    protected $publish;

    /**
     * @var Details
     */
    protected $publish_details;

    /**
     * @var int
     */
    protected $confirm;

    /**
     * @var Details
     */
    protected $confirm_details;

    /**
     * @return int
     */
    public function publish() : int
    {
        return $this->publish;
    }

    /**
     * @return Details
     */
    public function publishDetails() : Details
    {
        return $this->publish_details;
    }

    /**
     * @return int
     */
    public function confirm() : int
    {
        return $this->confirm;
    }

    /**
     * @return Details
     */
    public function confirmDetails() : Details
    {
        return $this->confirm_details;
    }
}
