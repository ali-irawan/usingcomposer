<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;

$log = new Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');