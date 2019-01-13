<?php declare(strict_types=1);

use ApiClients\Client\RabbitMQ\Management\AsyncClient;
use ApiClients\Client\RabbitMQ\Management\Resource\QueueInterface;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$config = require 'resolve_config.php';

$client = AsyncClient::create($loop, $config['baseUrl'], $config['username'], $config['password']);
$queues = $client->queues()->subscribe(function (QueueInterface $queue) {
    resource_pretty_print($queue);
});

$loop->run();
