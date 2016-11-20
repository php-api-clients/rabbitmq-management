<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Connection;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyClientProperties implements ClientPropertiesInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function product() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function version() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function platform() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function copyright() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function information() : string
    {
        return null;
    }

    /**
     * @return Connection\ClientProperties\Capabilities
     */
    public function capabilities() : Connection\ClientProperties\Capabilities
    {
        return null;
    }
}
