<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Overview\QueueTotals;

class QueueTotalsTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return QueueTotals::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
