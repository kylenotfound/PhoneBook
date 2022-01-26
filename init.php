<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

session_start();

//require dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$capsule = new Capsule();

$capsule->addConnection([
  'driver' => env('LOCAL_DB_DRIVER'),
  'host' => env('LOCAL_DB_HOST'),
  'database' => env('LOCAL_DB_DATABASE'),
  'username' => env('LOCAL_DB_USERNAME'),
  'password' => env('LOCAL_DB_PASSWORD'),
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();