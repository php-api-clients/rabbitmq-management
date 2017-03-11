<?php declare(strict_types=1);

namespace ApiClients\Client\RabbitMQ\Management;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options;
use ApiClients\Foundation\Transport\Middleware\JsonDecodeMiddleware;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\UserAgent\Options as UserAgentMiddlewareOptions;
use ApiClients\Middleware\UserAgent\UserAgentMiddleware;
use ApiClients\Middleware\UserAgent\UserAgentStrategies;

final class ApiSettings
{
    const NAMESPACE = 'ApiClients\\Client\\RabbitMQ\\Management\\Resource';

    const TRANSPORT_OPTIONS = [
        Options::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
        ],
        Options::TRANSPORT_OPTIONS => [
            TransportOptions::HEADERS => [
                'Content-Type' => 'application/json',
            ],
            TransportOptions::MIDDLEWARE => [
                JsonDecodeMiddleware::class,
                UserAgentMiddleware::class,
            ],
            TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                UserAgentMiddleware::class => [
                    UserAgentMiddlewareOptions::STRATEGY => UserAgentStrategies::PACKAGE_VERSION,
                    UserAgentMiddlewareOptions::PACKAGE => 'api-clients/rabbitmq-management',
                ],
            ],
        ],
    ];

    public static function getOptions(
        string $baseUrl,
        string $username,
        string $password,
        string $namespaceSuffix
    ): array {
        $url = parse_url($baseUrl);
        $auth = 'Basic ' . base64_encode($username . ':' . $password);

        $options = self::TRANSPORT_OPTIONS;
        $transportOptions = $options[Options::TRANSPORT_OPTIONS];
        $transportOptions[TransportOptions::SCHEMA] = $url['scheme'];
        $transportOptions[TransportOptions::HOST] = $url['host'] . ':' . $url['port'];
        $transportOptions[TransportOptions::PORT] = $url['port'];
        $transportOptions[TransportOptions::PATH] = $url['path'] . 'api/';
        $transportOptions[TransportOptions::HEADERS]['Authorization'] = $auth;
        $options[Options::TRANSPORT_OPTIONS] = $transportOptions;

        $options[Options::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $namespaceSuffix;

        return $options;
    }
}
