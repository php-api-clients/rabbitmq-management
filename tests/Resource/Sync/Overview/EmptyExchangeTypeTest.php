<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Sync\Overview;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\RabbitMQ\Management\Resource\Sync\Overview\EmptyExchangeType;

final class EmptyExchangeTypeTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return EmptyExchangeType::class;
    }
}
