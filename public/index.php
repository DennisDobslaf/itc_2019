<?php
require_once __DIR__ . '/../vendor/autoload.php';

$logger = new Monolog\Logger('app');
$logger->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__ . '/../logs/application.log', \Monolog\Logger::DEBUG));

$data = [
    ['test' => 42, 'foo' => 'bar'],
    ['test' => 182, 'foo' => 'baz'],
];

$logger->debug('Just a test', $data);
$logger->warning('Just a test');
$logger->error('Just a test');

