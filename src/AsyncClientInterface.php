<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use function React\Promise\resolve;

interface AsyncClientInterface
{
    /**
     * @return PromiseInterface
     */
    public function overview(): PromiseInterface;

    /**
     * @return ObservableInterface
     */
    public function queues(): ObservableInterface;

    /**
     * @return ObservableInterface
     */
    public function connections(): ObservableInterface;
}
