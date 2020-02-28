<?php require "vendor/autoload.php"; //para chamar todas as classes das libs que eu baixei.
use Monolog\Logger; //carrega classe logger
use Monolog\Handler\StreamHandler; //carrega classe stre..

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
?>