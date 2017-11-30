<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ConnectionInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function recvOct(): int;

    /**
     * @return int
     */
    public function sendOct(): int;

    /**
     * @return Details
     */
    public function recvOctDetails(): Details;

    /**
     * @return Details
     */
    public function sendOctDetails(): Details;

    /**
     * @return int
     */
    public function recvCnt(): int;

    /**
     * @return int
     */
    public function sendCnt(): int;

    /**
     * @return int
     */
    public function sendPend(): int;

    /**
     * @return string
     */
    public function state(): string;

    /**
     * @return int
     */
    public function channels(): int;

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return string
     */
    public function node(): string;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return int
     */
    public function port(): int;

    /**
     * @return int
     */
    public function peerPort(): int;

    /**
     * @return string
     */
    public function host(): string;

    /**
     * @return string
     */
    public function peerHost(): string;

    /**
     * @return bool
     */
    public function ssl(): bool;

    /**
     * @return mixed
     */
    public function peerCertSubject(): mixed;

    /**
     * @return mixed
     */
    public function peerCertIssuer(): mixed;

    /**
     * @return mixed
     */
    public function peerCertValidity(): mixed;

    /**
     * @return string
     */
    public function authMechanism(): string;

    /**
     * @return mixed
     */
    public function sslProtocol(): mixed;

    /**
     * @return mixed
     */
    public function sslKeyExchange(): mixed;

    /**
     * @return mixed
     */
    public function sslCipher(): mixed;

    /**
     * @return mixed
     */
    public function sslHash(): mixed;

    /**
     * @return string
     */
    public function protocol(): string;

    /**
     * @return string
     */
    public function user(): string;

    /**
     * @return string
     */
    public function vhost(): string;

    /**
     * @return int
     */
    public function timeout(): int;

    /**
     * @return int
     */
    public function frameMax(): int;

    /**
     * @return int
     */
    public function channelMax(): int;

    /**
     * @return Connection\ClientProperties
     */
    public function clientProperties(): Connection\ClientProperties;

    /**
     * @return int
     */
    public function connectedAt(): int;
}
