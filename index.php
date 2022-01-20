<?php

require_once 'app/init.php';

use App\Models\User;
use App\Libraries\Blade;

//echo('yo');
return Blade::view('test', ['name' => 'kyle']);
