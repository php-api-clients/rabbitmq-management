<?php declare(strict_types=1);

use ApiClients\Client\RabbitMQ\Management\Client;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$config = require 'resolve_config.php';

$client = Client::create($config['baseUrl'], $config['username'], $config['password']);
$queues = $client->queues();

foreach ($queues as $queue) {
    resource_pretty_print($queue);
}
