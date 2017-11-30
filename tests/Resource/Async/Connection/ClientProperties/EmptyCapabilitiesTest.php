<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async\Connection\ClientProperties;

use ApiClients\Client\RabbitMQ\Management\Resource\Async\Connection\ClientProperties\EmptyCapabilities;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyCapabilitiesTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyCapabilities::class;
    }
}
