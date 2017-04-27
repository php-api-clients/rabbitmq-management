<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Overview;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     messages_details="Details",
 *     messages_ready_details="Details",
 *     messages_unacknowledged_details="Details"
 * )
 * @EmptyResource("Overview\EmptyQueueTotals")
 */
abstract class QueueTotals extends AbstractResource implements QueueTotalsInterface
{
    /**
     * @var int
     */
    protected $messages;

    /**
     * @var Details
     */
    protected $messages_details;

    /**
     * @var int
     */
    protected $messages_ready;

    /**
     * @var Details
     */
    protected $messages_ready_details;

    /**
     * @var int
     */
    protected $messages_unacknowledged;

    /**
     * @var Details
     */
    protected $messages_unacknowledged_details;

    /**
     * @return int
     */
    public function messages() : int
    {
        return $this->messages;
    }

    /**
     * @return Details
     */
    public function messagesDetails() : Details
    {
        return $this->messages_details;
    }

    /**
     * @return int
     */
    public function messagesReady() : int
    {
        return $this->messages_ready;
    }

    /**
     * @return Details
     */
    public function messagesReadyDetails() : Details
    {
        return $this->messages_ready_details;
    }

    /**
     * @return int
     */
    public function messagesUnacknowledged() : int
    {
        return $this->messages_unacknowledged;
    }

    /**
     * @return Details
     */
    public function messagesUnacknowledgedDetails() : Details
    {
        return $this->messages_unacknowledged_details;
    }
}
