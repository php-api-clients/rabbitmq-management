<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Queue;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Queue\EmptyBackingQueueStatus")
 */
abstract class BackingQueueStatus extends AbstractResource implements BackingQueueStatusInterface
{
    /**
     * @var string
     */
    protected $mode;

    /**
     * @var int
     */
    protected $q1;

    /**
     * @var int
     */
    protected $q2;

    /**
     * @var array
     */
    protected $delta;

    /**
     * @var int
     */
    protected $q3;

    /**
     * @var int
     */
    protected $q4;

    /**
     * @var int
     */
    protected $len;

    /**
     * @var mixed
     */
    protected $target_ram_count;

    /**
     * @var int
     */
    protected $next_seq_id;

    /**
     * @var float
     */
    protected $avg_ingress_rate;

    /**
     * @var float
     */
    protected $avg_egress_rate;

    /**
     * @var float
     */
    protected $avg_ack_ingress_rate;

    /**
     * @var float
     */
    protected $avg_ack_egress_rate;

    /**
     * @return string
     */
    public function mode() : string
    {
        return $this->mode;
    }

    /**
     * @return int
     */
    public function q1() : int
    {
        return $this->q1;
    }

    /**
     * @return int
     */
    public function q2() : int
    {
        return $this->q2;
    }

    /**
     * @return array
     */
    public function delta() : array
    {
        return $this->delta;
    }

    /**
     * @return int
     */
    public function q3() : int
    {
        return $this->q3;
    }

    /**
     * @return int
     */
    public function q4() : int
    {
        return $this->q4;
    }

    /**
     * @return int
     */
    public function len() : int
    {
        return $this->len;
    }

    /**
     * @return mixed
     */
    public function targetRamCount() : mixed
    {
        return $this->target_ram_count;
    }

    /**
     * @return int
     */
    public function nextSeqId() : int
    {
        return $this->next_seq_id;
    }

    /**
     * @return float
     */
    public function avgIngressRate() : float
    {
        return $this->avg_ingress_rate;
    }

    /**
     * @return float
     */
    public function avgEgressRate() : float
    {
        return $this->avg_egress_rate;
    }

    /**
     * @return float
     */
    public function avgAckIngressRate() : float
    {
        return $this->avg_ack_ingress_rate;
    }

    /**
     * @return float
     */
    public function avgAckEgressRate() : float
    {
        return $this->avg_ack_egress_rate;
    }
}
