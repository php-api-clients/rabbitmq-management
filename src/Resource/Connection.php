<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     recv_oct_details="Details",
 *     send_oct_details="Details",
 *     client_properties="Connection\ClientProperties"
 * )
 * @EmptyResource("EmptyConnection")
 */
abstract class Connection extends AbstractResource implements ConnectionInterface
{
    /**
     * @var int
     */
    protected $recv_oct;

    /**
     * @var int
     */
    protected $send_oct;

    /**
     * @var Details
     */
    protected $recv_oct_details;

    /**
     * @var Details
     */
    protected $send_oct_details;

    /**
     * @var int
     */
    protected $recv_cnt;

    /**
     * @var int
     */
    protected $send_cnt;

    /**
     * @var int
     */
    protected $send_pend;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var int
     */
    protected $channels;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $node;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var int
     */
    protected $peer_port;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $peer_host;

    /**
     * @var bool
     */
    protected $ssl;

    /**
     * @var mixed
     */
    protected $peer_cert_subject;

    /**
     * @var mixed
     */
    protected $peer_cert_issuer;

    /**
     * @var mixed
     */
    protected $peer_cert_validity;

    /**
     * @var string
     */
    protected $auth_mechanism;

    /**
     * @var mixed
     */
    protected $ssl_protocol;

    /**
     * @var mixed
     */
    protected $ssl_key_exchange;

    /**
     * @var mixed
     */
    protected $ssl_cipher;

    /**
     * @var mixed
     */
    protected $ssl_hash;

    /**
     * @var string
     */
    protected $protocol;

    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $vhost;

    /**
     * @var int
     */
    protected $timeout;

    /**
     * @var int
     */
    protected $frame_max;

    /**
     * @var int
     */
    protected $channel_max;

    /**
     * @var Connection\ClientProperties
     */
    protected $client_properties;

    /**
     * @var int
     */
    protected $connected_at;

    /**
     * @return int
     */
    public function recvOct() : int
    {
        return $this->recv_oct;
    }

    /**
     * @return int
     */
    public function sendOct() : int
    {
        return $this->send_oct;
    }

    /**
     * @return Details
     */
    public function recvOctDetails() : Details
    {
        return $this->recv_oct_details;
    }

    /**
     * @return Details
     */
    public function sendOctDetails() : Details
    {
        return $this->send_oct_details;
    }

    /**
     * @return int
     */
    public function recvCnt() : int
    {
        return $this->recv_cnt;
    }

    /**
     * @return int
     */
    public function sendCnt() : int
    {
        return $this->send_cnt;
    }

    /**
     * @return int
     */
    public function sendPend() : int
    {
        return $this->send_pend;
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
    public function channels() : int
    {
        return $this->channels;
    }

    /**
     * @return string
     */
    public function type() : string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function node() : string
    {
        return $this->node;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function port() : int
    {
        return $this->port;
    }

    /**
     * @return int
     */
    public function peerPort() : int
    {
        return $this->peer_port;
    }

    /**
     * @return string
     */
    public function host() : string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function peerHost() : string
    {
        return $this->peer_host;
    }

    /**
     * @return bool
     */
    public function ssl() : bool
    {
        return $this->ssl;
    }

    /**
     * @return mixed
     */
    public function peerCertSubject() : mixed
    {
        return $this->peer_cert_subject;
    }

    /**
     * @return mixed
     */
    public function peerCertIssuer() : mixed
    {
        return $this->peer_cert_issuer;
    }

    /**
     * @return mixed
     */
    public function peerCertValidity() : mixed
    {
        return $this->peer_cert_validity;
    }

    /**
     * @return string
     */
    public function authMechanism() : string
    {
        return $this->auth_mechanism;
    }

    /**
     * @return mixed
     */
    public function sslProtocol() : mixed
    {
        return $this->ssl_protocol;
    }

    /**
     * @return mixed
     */
    public function sslKeyExchange() : mixed
    {
        return $this->ssl_key_exchange;
    }

    /**
     * @return mixed
     */
    public function sslCipher() : mixed
    {
        return $this->ssl_cipher;
    }

    /**
     * @return mixed
     */
    public function sslHash() : mixed
    {
        return $this->ssl_hash;
    }

    /**
     * @return string
     */
    public function protocol() : string
    {
        return $this->protocol;
    }

    /**
     * @return string
     */
    public function user() : string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function vhost() : string
    {
        return $this->vhost;
    }

    /**
     * @return int
     */
    public function timeout() : int
    {
        return $this->timeout;
    }

    /**
     * @return int
     */
    public function frameMax() : int
    {
        return $this->frame_max;
    }

    /**
     * @return int
     */
    public function channelMax() : int
    {
        return $this->channel_max;
    }

    /**
     * @return Connection\ClientProperties
     */
    public function clientProperties() : Connection\ClientProperties
    {
        return $this->client_properties;
    }

    /**
     * @return int
     */
    public function connectedAt() : int
    {
        return $this->connected_at;
    }
}
