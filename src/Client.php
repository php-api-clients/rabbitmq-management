<?php
declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use ApiClients\Foundation\Hydrator\Options;
use React\EventLoop\Factory as LoopFactory;
use Rx\React\Promise;
use ApiClients\Client\RabbitMQ\Management\Resource\OverviewInterface;
use ApiClients\Foundation\Transport\Client as Transport;
use ApiClients\Foundation\Transport\Factory;
use function Clue\React\Block\await;
use function React\Promise\resolve;

final class Client
{
    /**
     * @var Transport
     */
    protected $transport;

    /**
     * @var AsyncClient
     */
    protected $client;

    /**
     * @param string $baseUrl
     * @param string $username
     * @param string $password
     * @param Transport|null $transport
     */
    public function __construct(
        string $baseUrl,
        string $username,
        string $password,
        Transport $transport = null
    ) {
        $loop = LoopFactory::create();
        if (!($transport instanceof Transport)) {
            $options = ApiSettings::getOptions($baseUrl, $username, $password, 'Sync');
            $transport = Factory::create($loop, $options);
        }
        $this->transport = $transport;
        $this->client = new AsyncClient($loop, $baseUrl, $username, $password, $this->transport);
    }

    /**
     * @return OverviewInterface
     */
    public function overview(): OverviewInterface
    {
        return await(
            $this->client->overview(),
            $this->transport->getLoop()
        );
    }

    /**
     * @return array
     */
    public function queues(): array
    {
        return await(
            Promise::fromObservable(
                $this->client->queues()->toArray()
            ),
            $this->transport->getLoop()
        );
    }

    /**
     * @return array
     */
    public function connections(): array
    {
        return await(
            Promise::fromObservable(
                $this->client->connections()->toArray()
            ),
            $this->transport->getLoop()
        );
    }
}
