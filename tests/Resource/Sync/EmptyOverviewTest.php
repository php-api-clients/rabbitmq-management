<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\RabbitMQ\Management\Resource\Sync\EmptyOverview;

final class EmptyOverviewTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return EmptyOverview::class;
    }
}
