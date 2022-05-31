<?php

namespace Compotest;

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/src/index.php';

$log = new \Monolog\Logger('name');
$log->pushHandler(new \Monolog\Handler\StreamHandler('app.log', \Monolog\Logger::WARNING));
$log->warning('Starting...');

go();