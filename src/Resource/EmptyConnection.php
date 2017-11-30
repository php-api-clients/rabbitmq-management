<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyConnection implements ConnectionInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function recvOct(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function sendOct(): int
    {
        return null;
    }

    /**
     * @return Details
     */
    public function recvOctDetails(): Details
    {
        return null;
    }

    /**
     * @return Details
     */
    public function sendOctDetails(): Details
    {
        return null;
    }

    /**
     * @return int
     */
    public function recvCnt(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function sendCnt(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function sendPend(): int
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
    public function channels(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function type(): string
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

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function port(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function peerPort(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function host(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function peerHost(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function ssl(): bool
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function peerCertSubject(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function peerCertIssuer(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function peerCertValidity(): mixed
    {
        return null;
    }

    /**
     * @return string
     */
    public function authMechanism(): string
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function sslProtocol(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function sslKeyExchange(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function sslCipher(): mixed
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function sslHash(): mixed
    {
        return null;
    }

    /**
     * @return string
     */
    public function protocol(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function user(): string
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
     * @return int
     */
    public function timeout(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function frameMax(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function channelMax(): int
    {
        return null;
    }

    /**
     * @return Connection\ClientProperties
     */
    public function clientProperties(): Connection\ClientProperties
    {
        return null;
    }

    /**
     * @return int
     */
    public function connectedAt(): int
    {
        return null;
    }
}
