<?php declare(strict_types=1);

use ApiClients\Client\RabbitMQ\Management\Client;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$config = require 'resolve_config.php';

$client = Client::create($config['baseUrl'], $config['username'], $config['password']);
$connections = $client->connections();

foreach ($connections as $connection) {
    resource_pretty_print($connection);
}
