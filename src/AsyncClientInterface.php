<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use React\Promise\PromiseInterface;
use Rx\ObservableInterface;

interface AsyncClientInterface
{
    /**
     * @return PromiseInterface
     */
    public function overview(): PromiseInterface;

    /**
     * @param  int|null            $interval
     * @return ObservableInterface
     */
    public function queues(int $interval = null): ObservableInterface;

    /**
     * @return ObservableInterface
     */
    public function connections(): ObservableInterface;
}
