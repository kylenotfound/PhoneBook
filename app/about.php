<?php

require_once '../init.php';

use App\Libraries\Blade;


$_SESSION['page'] = 'about';
Blade::view('about');