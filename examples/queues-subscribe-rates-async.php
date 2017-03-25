<?php declare(strict_types=1);

use ApiClients\Client\RabbitMQ\Management\AsyncClient;
use ApiClients\Client\RabbitMQ\Management\Resource\QueueInterface;
use React\EventLoop\Factory;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$config = require 'resolve_config.php';

$height = 0;
$length = 0;
$queues = [];

$client = AsyncClient::create($loop, $config['baseUrl'], $config['username'], $config['password']);
$client->queues(1)->filter(function (QueueInterface $queue) {
    return strpos($queue->name(), 'amq.gen') !== 0;
})->subscribe(function (QueueInterface $queue) use (&$queues) {
    $queues[$queue->name()] = $queue->messageStats()->deliverDetails()->rate();
});

$loop->addPeriodicTimer(1, function () use (&$height, &$length, &$queues) {
    for ($i = 0; $i < $height; $i++) {
        echo "\033[1A";
    }

    if ($height < count($queues)) {
        $height = count($queues);
    }

    ksort($queues);

    $i = 0;
    foreach ($queues as $key => $value) {
        $line = $key . ': ' . $value . ' sec';
        if ($length < strlen($line)) {
            $length = strlen($line);
        }
        $line = str_pad($line, $length, ' ');
        echo $line, PHP_EOL;
        $i++;
    }
    for (; $i < $height; $i++) {
        echo "\r";
    }

    $queues = [];
});

$loop->run();
