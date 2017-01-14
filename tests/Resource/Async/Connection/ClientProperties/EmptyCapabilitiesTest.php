<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async\Connection\ClientProperties;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\RabbitMQ\Management\Resource\Async\Connection\ClientProperties\EmptyCapabilities;

final class EmptyCapabilitiesTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return EmptyCapabilities::class;
    }
}
