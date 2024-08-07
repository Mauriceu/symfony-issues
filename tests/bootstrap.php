<?php


use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

$_ENV['APP_ENV'] = 'test';

require dirname(__DIR__).'/vendor/autoload.php';
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
$kernel = new Kernel("test", true);
$kernel->boot();