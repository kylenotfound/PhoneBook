<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

$capsule = new Capsule();

$capsule->addConnection([
  'driver' => 'mysql',
  'host' => '127.0.0.1',
  'database' => 'phone_book',
  'username' => 'root',
  'password' => 'password'
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();