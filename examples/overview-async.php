<?php declare(strict_types=1);

use ApiClients\Client\RabbitMQ\Management\AsyncClient;
use ApiClients\Client\RabbitMQ\Management\Resource\OverviewInterface;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$config = require 'resolve_config.php';

$client = AsyncClient::create($loop, $config['baseUrl'], $config['username'], $config['password']);
$overview = $client->overview()->then(function (OverviewInterface $overview) {
    resource_pretty_print($overview);
});

$loop->run();
