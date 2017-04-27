<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management\Resource\Connection;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     capabilities="Connection\ClientProperties\Capabilities"
 * )
 * @EmptyResource("Connection\EmptyClientProperties")
 */
abstract class ClientProperties extends AbstractResource implements ClientPropertiesInterface
{
    /**
     * @var string
     */
    protected $product;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $platform;

    /**
     * @var string
     */
    protected $copyright;

    /**
     * @var string
     */
    protected $information;

    /**
     * @var Connection\ClientProperties\Capabilities
     */
    protected $capabilities;

    /**
     * @return string
     */
    public function product() : string
    {
        return $this->product;
    }

    /**
     * @return string
     */
    public function version() : string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function platform() : string
    {
        return $this->platform;
    }

    /**
     * @return string
     */
    public function copyright() : string
    {
        return $this->copyright;
    }

    /**
     * @return string
     */
    public function information() : string
    {
        return $this->information;
    }

    /**
     * @return Connection\ClientProperties\Capabilities
     */
    public function capabilities() : Connection\ClientProperties\Capabilities
    {
        return $this->capabilities;
    }
}
