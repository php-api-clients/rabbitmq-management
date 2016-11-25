<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTime;

interface QueueInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function memory() : int;

    /**
     * @return MessageStats
     */
    public function messageStats() : MessageStats;

    /**
     * @return int
     */
    public function messages() : int;

    /**
     * @return Details
     */
    public function messagesDetails() : Details;

    /**
     * @return int
     */
    public function messagesReady() : int;

    /**
     * @return Details
     */
    public function messagesReadyDetails() : Details;

    /**
     * @return int
     */
    public function messagesUnacknowledged() : int;

    /**
     * @return Details
     */
    public function messagesUnacknowledgedDetails() : Details;

    /**
     * @return DateTime
     */
    public function idleSince() : DateTime;

    /**
     * @return mixed
     */
    public function consumerUtilisation() : mixed;

    /**
     * @return mixed
     */
    public function policy() : mixed;

    /**
     * @return mixed
     */
    public function exclusiveConsumerTag() : mixed;

    /**
     * @return int
     */
    public function consumers() : int;

    /**
     * @return mixed
     */
    public function recoverableSlaves() : mixed;

    /**
     * @return string
     */
    public function state() : string;

    /**
     * @return int
     */
    public function messagesRam() : int;

    /**
     * @return int
     */
    public function messagesReadyRam() : int;

    /**
     * @return int
     */
    public function messagesUnacknowledgedRam() : int;

    /**
     * @return int
     */
    public function messagesPersistent() : int;

    /**
     * @return int
     */
    public function messageBytes() : int;

    /**
     * @return int
     */
    public function messageBytesReady() : int;

    /**
     * @return int
     */
    public function messageBytesUnacknowledged() : int;

    /**
     * @return int
     */
    public function messageBytesRam() : int;

    /**
     * @return int
     */
    public function messageBytesPersistent() : int;

    /**
     * @return DateTime
     */
    public function headMessageTimestamp() : DateTime;

    /**
     * @return int
     */
    public function diskReads() : int;

    /**
     * @return int
     */
    public function diskWrites() : int;

    /**
     * @return Queue\BackingQueueStatus
     */
    public function backingQueueStatus() : Queue\BackingQueueStatus;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function vhost() : string;

    /**
     * @return bool
     */
    public function durable() : bool;

    /**
     * @return bool
     */
    public function autoDelete() : bool;

    /**
     * @return bool
     */
    public function exclusive() : bool;

    /**
     * @return array
     */
    public function arguments() : array;

    /**
     * @return string
     */
    public function node() : string;
}
