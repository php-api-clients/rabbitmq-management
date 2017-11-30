<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async;

use ApiClients\Client\RabbitMQ\Management\ApiSettings;
use ApiClients\Client\RabbitMQ\Management\Resource\Overview;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class OverviewTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Overview::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
