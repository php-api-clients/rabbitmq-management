<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Queue;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyBackingQueueStatus implements BackingQueueStatusInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function mode() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function q1() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function q2() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function delta() : array
    {
        return null;
    }

    /**
     * @return int
     */
    public function q3() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function q4() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function len() : int
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function targetRamCount() : mixed
    {
        return null;
    }

    /**
     * @return int
     */
    public function nextSeqId() : int
    {
        return null;
    }

    /**
     * @return float
     */
    public function avgIngressRate() : float
    {
        return null;
    }

    /**
     * @return float
     */
    public function avgEgressRate() : float
    {
        return null;
    }

    /**
     * @return float
     */
    public function avgAckIngressRate() : float
    {
        return null;
    }

    /**
     * @return float
     */
    public function avgAckEgressRate() : float
    {
        return null;
    }
}
