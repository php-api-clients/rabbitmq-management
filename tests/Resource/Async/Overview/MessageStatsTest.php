<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async\Overview;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Overview\MessageStats;

class MessageStatsTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return MessageStats::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
