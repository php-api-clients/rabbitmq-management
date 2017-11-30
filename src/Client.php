<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use ApiClients\Client\RabbitMQ\Management\Resource\OverviewInterface;
use ApiClients\Foundation\Factory;
use React\EventLoop\Factory as LoopFactory;
use React\EventLoop\LoopInterface;
use Rx\React\Promise;
use function Clue\React\Block\await;

final class Client implements ClientInterface
{
    /**
     * @var LoopInterface
     */
    private $loop;

    /**
     * @var AsyncClientInterface
     */
    private $asyncClient;

    /**
     * @param LoopInterface        $loop
     * @param AsyncClientInterface $asyncClient
     */
    private function __construct(LoopInterface $loop, AsyncClientInterface $asyncClient)
    {
        $this->loop = $loop;
        $this->asyncClient = $asyncClient;
    }

    /**
     * Create a new AsyncClient based on the loop and other options pass.
     *
     * @param  string $baseUrl
     * @param  string $username
     * @param  string $password
     * @param  array  $options
     * @return Client
     */
    public static function create(
        string $baseUrl,
        string $username,
        string $password,
        array $options = []
    ): self {
        $loop = LoopFactory::create();
        $options = ApiSettings::getOptions($baseUrl, $username, $password, 'Sync');
        $client = Factory::create($loop, $options);
        $asyncClient = AsyncClient::createFromClient($client);

        return self::createFromClient($loop, $asyncClient);
    }

    /**
     * Create an Client from a AsyncClientInterface.
     * Be sure to pass in a client with the options from ApiSettings and the Sync namespace suffix,
     * and pass in the same loop as associated with the AsyncClient you're passing in.
     *
     * @param  LoopInterface        $loop
     * @param  AsyncClientInterface $asyncClient
     * @return Client
     */
    public static function createFromClient(LoopInterface $loop, AsyncClientInterface $asyncClient): self
    {
        return new self($loop, $asyncClient);
    }

    /**
     * @return OverviewInterface
     */
    public function overview(): OverviewInterface
    {
        return await(
            $this->asyncClient->overview(),
            $this->loop
        );
    }

    /**
     * @return array
     */
    public function queues(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->queues()->toArray()
            ),
            $this->loop
        );
    }

    /**
     * @return array
     */
    public function connections(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->connections()->toArray()
            ),
            $this->loop
        );
    }
}
