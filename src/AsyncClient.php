<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use ApiClients\Foundation\ClientInterface as FoundationClientInterface;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use Rx\React\Promise;
use Rx\Scheduler\EventLoopScheduler;
use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class AsyncClient implements AsyncClientInterface
{
    /**
     * @var FoundationClientInterface
     */
    private $client;

    /**
     * @param FoundationClientInterface $client
     */
    private function __construct(FoundationClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Create a new AsyncClient based on the loop and other options pass.
     *
     * @param  LoopInterface $loop
     * @param  string        $baseUrl
     * @param  string        $username
     * @param  string        $password
     * @param  array         $options
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        string $baseUrl,
        string $username,
        string $password,
        array $options = []
    ): self {
        $options = ApiSettings::getOptions($baseUrl, $username, $password, 'Async');
        $client = Factory::create($loop, $options);

        return new self($client);
    }

    /**
     * Create an AsyncClient from a ApiClients\Foundation\ClientInterface.
     * Be sure to pass in a client with the options from ApiSettings and the Async namespace suffix.
     *
     * @param  FoundationClientInterface $client
     * @return AsyncClient
     */
    public static function createFromClient(FoundationClientInterface $client): self
    {
        return new self($client);
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
                new HydrateCommand('Overview', $response->getBody()->getParsedContents())
            ));
        });
    }

    /**
     * @param  int|null            $interval
     * @return ObservableInterface
     */
    public function queues(int $interval = null): ObservableInterface
    {
        if ($interval === null) {
            return Promise::toObservable($this->client->handle(
                new SimpleRequestCommand('queues')
            ))->flatMap(function (ResponseInterface $response) {
                return observableFromArray($response->getBody()->getParsedContents());
            })->flatMap(function ($queue) {
                return Promise::toObservable($this->client->handle(
                    new HydrateCommand('Queue', $queue)
                ));
            });
        }

        $scheduler = new EventLoopScheduler($this->client->getFromContainer(LoopInterface::class));

        return Observable::interval($interval * 1000, $scheduler)->flatMap(function () {
            return $this->queues();
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
            return observableFromArray($response->getBody()->getParsedContents());
        })->flatMap(function ($connection) {
            return Promise::toObservable($this->client->handle(
                new HydrateCommand('Connection', $connection)
            ));
        });
    }
}
