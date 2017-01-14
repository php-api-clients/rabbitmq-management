<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\RabbitMQ\Management\Resource\Async;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\RabbitMQ\Management\Resource\Async\EmptyDetails;

final class EmptyDetailsTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return EmptyDetails::class;
    }
}
