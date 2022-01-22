<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

//display errors for debugging on elivs
if (env('DB_LOCATION') == 'elvis') {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}

$capsule = new Capsule();

if (env('DB_LOCATION') == 'local') { //local is my local PCs dev env
  $capsule->addConnection([
    'driver' => env('LOCAL_DB_DRIVER'),
    'host' => env('LOCAL_DB_HOST'),
    'database' => env('LOCAL_DB_DATABASE'),
    'username' => env('LOCAL_DB_USERNAME'),
    'password' => env('LOCAL_DB_PASSWORD'),
  ]);
} 

if(env('DB_LOCATION') == 'elvis') { //elvis is Rowan University's Fedora Server this app will be running on
  $capsule->addConnection([
    'driver' => env('ELVIS_DB_DRIVER'),
    'host' => env('ELVIS_DB_HOST'),
    'database' => env('ELVIS_DB_DATABASE'),
    'username' => env('ELVIS_DB_USERNAME'),
    'password' => env('ELVIS_DB_PASSWORD'),
  ]);
}

$capsule->setAsGlobal();
$capsule->bootEloquent();