<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTime;

/**
 * @Nested(
 *     messages_details="Details",
 *     messages_ready_details="Details",
 *     messages_unacknowledged_details="Details",
 *     backing_queue_status="Queue\BackingQueueStatus"
 * )
 * @EmptyResource("EmptyQueue")
 */
abstract class Queue extends AbstractResource implements QueueInterface
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
     * @var DateTime
     */
    protected $idle_since;

    /**
     * @var mixed
     */
    protected $consumer_utilisation;

    /**
     * @var mixed
     */
    protected $policy;

    /**
     * @var mixed
     */
    protected $exclusive_consumer_tag;

    /**
     * @var int
     */
    protected $consumers;

    /**
     * @var mixed
     */
    protected $recoverable_slaves;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var int
     */
    protected $messages_ram;

    /**
     * @var int
     */
    protected $messages_ready_ram;

    /**
     * @var int
     */
    protected $messages_unacknowledged_ram;

    /**
     * @var int
     */
    protected $messages_persistent;

    /**
     * @var int
     */
    protected $message_bytes;

    /**
     * @var int
     */
    protected $message_bytes_ready;

    /**
     * @var int
     */
    protected $message_bytes_unacknowledged;

    /**
     * @var int
     */
    protected $message_bytes_ram;

    /**
     * @var int
     */
    protected $message_bytes_persistent;

    /**
     * @var DateTime
     */
    protected $head_message_timestamp;

    /**
     * @var int
     */
    protected $disk_reads;

    /**
     * @var int
     */
    protected $disk_writes;

    /**
     * @var Queue\BackingQueueStatus
     */
    protected $backing_queue_status;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $vhost;

    /**
     * @var bool
     */
    protected $durable;

    /**
     * @var bool
     */
    protected $auto_delete;

    /**
     * @var bool
     */
    protected $exclusive;

    /**
     * @var array
     */
    protected $arguments;

    /**
     * @var string
     */
    protected $node;

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

    /**
     * @return DateTime
     */
    public function idleSince() : DateTime
    {
        return $this->idle_since;
    }

    /**
     * @return mixed
     */
    public function consumerUtilisation() : mixed
    {
        return $this->consumer_utilisation;
    }

    /**
     * @return mixed
     */
    public function policy() : mixed
    {
        return $this->policy;
    }

    /**
     * @return mixed
     */
    public function exclusiveConsumerTag() : mixed
    {
        return $this->exclusive_consumer_tag;
    }

    /**
     * @return int
     */
    public function consumers() : int
    {
        return $this->consumers;
    }

    /**
     * @return mixed
     */
    public function recoverableSlaves() : mixed
    {
        return $this->recoverable_slaves;
    }

    /**
     * @return string
     */
    public function state() : string
    {
        return $this->state;
    }

    /**
     * @return int
     */
    public function messagesRam() : int
    {
        return $this->messages_ram;
    }

    /**
     * @return int
     */
    public function messagesReadyRam() : int
    {
        return $this->messages_ready_ram;
    }

    /**
     * @return int
     */
    public function messagesUnacknowledgedRam() : int
    {
        return $this->messages_unacknowledged_ram;
    }

    /**
     * @return int
     */
    public function messagesPersistent() : int
    {
        return $this->messages_persistent;
    }

    /**
     * @return int
     */
    public function messageBytes() : int
    {
        return $this->message_bytes;
    }

    /**
     * @return int
     */
    public function messageBytesReady() : int
    {
        return $this->message_bytes_ready;
    }

    /**
     * @return int
     */
    public function messageBytesUnacknowledged() : int
    {
        return $this->message_bytes_unacknowledged;
    }

    /**
     * @return int
     */
    public function messageBytesRam() : int
    {
        return $this->message_bytes_ram;
    }

    /**
     * @return int
     */
    public function messageBytesPersistent() : int
    {
        return $this->message_bytes_persistent;
    }

    /**
     * @return DateTime
     */
    public function headMessageTimestamp() : DateTime
    {
        return $this->head_message_timestamp;
    }

    /**
     * @return int
     */
    public function diskReads() : int
    {
        return $this->disk_reads;
    }

    /**
     * @return int
     */
    public function diskWrites() : int
    {
        return $this->disk_writes;
    }

    /**
     * @return Queue\BackingQueueStatus
     */
    public function backingQueueStatus() : Queue\BackingQueueStatus
    {
        return $this->backing_queue_status;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function vhost() : string
    {
        return $this->vhost;
    }

    /**
     * @return bool
     */
    public function durable() : bool
    {
        return $this->durable;
    }

    /**
     * @return bool
     */
    public function autoDelete() : bool
    {
        return $this->auto_delete;
    }

    /**
     * @return bool
     */
    public function exclusive() : bool
    {
        return $this->exclusive;
    }

    /**
     * @return array
     */
    public function arguments() : array
    {
        return $this->arguments;
    }

    /**
     * @return string
     */
    public function node() : string
    {
        return $this->node;
    }
}
