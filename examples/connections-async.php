<?php declare(strict_types=1);

use ApiClients\Client\RabbitMQ\Management\AsyncClient;
use ApiClients\Client\RabbitMQ\Management\Resource\ConnectionInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$config = require 'resolve_config.php';

$client = AsyncClient::create($loop, $config['baseUrl'], $config['username'], $config['password']);
$connections = $client->connections()->subscribe(function (ConnectionInterface $connection) {
    resource_pretty_print($connection);
});

$loop->run();
