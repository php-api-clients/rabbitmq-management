<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use Rx\React\Promise;
use ApiClients\Foundation\Client;
use ApiClients\Foundation\Factory;
use function React\Promise\resolve;

final class AsyncClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @param LoopInterface $loop
     * @param string $baseUrl
     * @param string $username
     * @param string $password
     * @param Client|null $client
     */
    public function __construct(
        LoopInterface $loop,
        string $baseUrl,
        string $username,
        string $password,
        Client $client = null
    ) {
        if (!($client instanceof Client)) {
            $options = ApiSettings::getOptions($baseUrl, $username, $password, 'Async');
            $client = Factory::create($loop, $options);
        }
        $this->client = $client;
    }

    /**
     * @return PromiseInterface
     */
    public function overview(): PromiseInterface
    {
        return $this->client->handle(
            new SimpleRequestCommand('overview')
        )->then(function (ResponseInterface $response) {
            return resolve($this->client->handle(
                new HydrateCommand('Overview', $response->getBody()->getJson())
            ));
        });
    }

    /**
     * @return ObservableInterface
     */
    public function queues(): ObservableInterface
    {
        return Promise::toObservable($this->client->handle(
            new SimpleRequestCommand('queues')
        ))->flatMap(function (ResponseInterface $response) {
            return Observable::fromArray($response->getBody()->getJson());
        })->flatMap(function ($queue) {
            return Promise::toObservable($this->client->handle(
                new HydrateCommand('Queue', $queue)
            ));
        });
    }

    /**
     * @return ObservableInterface
     */
    public function connections(): ObservableInterface
    {
        return Promise::toObservable($this->client->handle(
            new SimpleRequestCommand('connections')
        ))->flatMap(function (ResponseInterface $response) {
            return Observable::fromArray($response->getBody()->getJson());
        })->flatMap(function ($connection) {
            return Promise::toObservable($this->client->handle(
                new HydrateCommand('Connection', $connection)
            ));
        });
    }
}
