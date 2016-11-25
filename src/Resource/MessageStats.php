<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     deliver_details="Details",
 *     deliver_no_ack_details="Details",
 *     get_details="Details",
 *     get_no_ack_details="Details",
 *     publish_details="Details",
 *     publish_in_details="Details",
 *     publish_out_details="Details",
 *     ack_details="Details",
 *     deliver_get_details="Details",
 *     confirm_details="Details",
 *     return_unroutable_details="Details",
 *     redeliver_details="Details"
 * )
 * @EmptyResource("EmptyMessageStats")
 */
abstract class MessageStats extends AbstractResource implements MessageStatsInterface
{
    /**
     * @var int
     */
    protected $deliver;

    /**
     * @var Details
     */
    protected $deliver_details;

    /**
     * @var int
     */
    protected $deliver_no_ack;

    /**
     * @var Details
     */
    protected $deliver_no_ack_details;

    /**
     * @var int
     */
    protected $get;

    /**
     * @var Details
     */
    protected $get_details;

    /**
     * @var int
     */
    protected $get_no_ack;

    /**
     * @var Details
     */
    protected $get_no_ack_details;

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
    protected $publish_in;

    /**
     * @var Details
     */
    protected $publish_in_details;

    /**
     * @var int
     */
    protected $publish_out;

    /**
     * @var Details
     */
    protected $publish_out_details;

    /**
     * @var int
     */
    protected $ack;

    /**
     * @var Details
     */
    protected $ack_details;

    /**
     * @var int
     */
    protected $deliver_get;

    /**
     * @var Details
     */
    protected $deliver_get_details;

    /**
     * @var int
     */
    protected $confirm;

    /**
     * @var Details
     */
    protected $confirm_details;

    /**
     * @var int
     */
    protected $return_unroutable;

    /**
     * @var Details
     */
    protected $return_unroutable_details;

    /**
     * @var int
     */
    protected $redeliver;

    /**
     * @var Details
     */
    protected $redeliver_details;

    /**
     * @return int
     */
    public function deliver() : int
    {
        return $this->deliver;
    }

    /**
     * @return Details
     */
    public function deliverDetails() : Details
    {
        return $this->deliver_details;
    }

    /**
     * @return int
     */
    public function deliverNoAck() : int
    {
        return $this->deliver_no_ack;
    }

    /**
     * @return Details
     */
    public function deliverNoAckDetails() : Details
    {
        return $this->deliver_no_ack_details;
    }

    /**
     * @return int
     */
    public function get() : int
    {
        return $this->get;
    }

    /**
     * @return Details
     */
    public function getDetails() : Details
    {
        return $this->get_details;
    }

    /**
     * @return int
     */
    public function getNoAck() : int
    {
        return $this->get_no_ack;
    }

    /**
     * @return Details
     */
    public function getNoAckDetails() : Details
    {
        return $this->get_no_ack_details;
    }

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
    public function publishIn() : int
    {
        return $this->publish_in;
    }

    /**
     * @return Details
     */
    public function publishInDetails() : Details
    {
        return $this->publish_in_details;
    }

    /**
     * @return int
     */
    public function publishOut() : int
    {
        return $this->publish_out;
    }

    /**
     * @return Details
     */
    public function publishOutDetails() : Details
    {
        return $this->publish_out_details;
    }

    /**
     * @return int
     */
    public function ack() : int
    {
        return $this->ack;
    }

    /**
     * @return Details
     */
    public function ackDetails() : Details
    {
        return $this->ack_details;
    }

    /**
     * @return int
     */
    public function deliverGet() : int
    {
        return $this->deliver_get;
    }

    /**
     * @return Details
     */
    public function deliverGetDetails() : Details
    {
        return $this->deliver_get_details;
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

    /**
     * @return int
     */
    public function returnUnroutable() : int
    {
        return $this->return_unroutable;
    }

    /**
     * @return Details
     */
    public function returnUnroutableDetails() : Details
    {
        return $this->return_unroutable_details;
    }

    /**
     * @return int
     */
    public function redeliver() : int
    {
        return $this->redeliver;
    }

    /**
     * @return Details
     */
    public function redeliverDetails() : Details
    {
        return $this->redeliver_details;
    }
}
