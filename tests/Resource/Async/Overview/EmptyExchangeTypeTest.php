<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async\Overview;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\RabbitMQ\Management\Resource\Async\Overview\EmptyExchangeType;

final class EmptyExchangeTypeTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return EmptyExchangeType::class;
    }
}
