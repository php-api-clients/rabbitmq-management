<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Connection;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ClientPropertiesInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function product() : string;

    /**
     * @return string
     */
    public function version() : string;

    /**
     * @return string
     */
    public function platform() : string;

    /**
     * @return string
     */
    public function copyright() : string;

    /**
     * @return string
     */
    public function information() : string;

    /**
     * @return Connection\ClientProperties\Capabilities
     */
    public function capabilities() : Connection\ClientProperties\Capabilities;
}
