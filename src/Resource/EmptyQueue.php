<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTime;

abstract class EmptyQueue implements QueueInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function memory(): int
    {
        return null;
    }

    /**
     * @return MessageStats
     */
    public function messageStats(): MessageStats
    {
        return null;
    }

    /**
     * @return int
     */
    public function messages(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function messagesDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesReady(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function messagesReadyDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesUnacknowledged(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function messagesUnacknowledgedDetails(): Details
    {
        return null;
    }

    /**
     * @return DateTime
     */
    public function idleSince(): DateTime
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function consumerUtilisation(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function policy(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function exclusiveConsumerTag(): mixed
    {
        return null;
    }

    /**
     * @return int
     */
    public function consumers(): int
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function recoverableSlaves(): mixed
    {
        return null;
    }

    /**
     * @return string
     */
    public function state(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesRam(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesReadyRam(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesUnacknowledgedRam(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messagesPersistent(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messageBytes(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messageBytesReady(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messageBytesUnacknowledged(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messageBytesRam(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function messageBytesPersistent(): int
    {
        return null;
    }

    /**
     * @return DateTime
     */
    public function headMessageTimestamp(): DateTime
    {
        return null;
    }

    /**
     * @return int
     */
    public function diskReads(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function diskWrites(): int
    {
        return null;
    }

    /**
     * @return Queue\BackingQueueStatus
     */
    public function backingQueueStatus(): Queue\BackingQueueStatus
    {
        return null;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function vhost(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function durable(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function autoDelete(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function exclusive(): bool
    {
        return null;
    }

    /**
     * @return array
     */
    public function arguments(): array
    {
        return null;
    }

    /**
     * @return string
     */
    public function node(): string
    {
        return null;
    }
}
