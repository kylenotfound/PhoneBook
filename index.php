<?php

require_once 'init.php';

use App\Libraries\Blade;

$_SESSION['page'] = 'welcome';
return Blade::view('welcome');
