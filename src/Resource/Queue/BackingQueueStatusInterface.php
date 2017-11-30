<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Queue;

use ApiClients\Foundation\Resource\ResourceInterface;

interface BackingQueueStatusInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function mode(): string;

    /**
     * @return int
     */
    public function q1(): int;

    /**
     * @return int
     */
    public function q2(): int;

    /**
     * @return array
     */
    public function delta(): array;

    /**
     * @return int
     */
    public function q3(): int;

    /**
     * @return int
     */
    public function q4(): int;

    /**
     * @return int
     */
    public function len(): int;

    /**
     * @return mixed
     */
    public function targetRamCount(): mixed;

    /**
     * @return int
     */
    public function nextSeqId(): int;

    /**
     * @return float
     */
    public function avgIngressRate(): float;

    /**
     * @return float
     */
    public function avgEgressRate(): float;

    /**
     * @return float
     */
    public function avgAckIngressRate(): float;

    /**
     * @return float
     */
    public function avgAckEgressRate(): float;
}
