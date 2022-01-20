<?php

namespace App\Libraries;

use Jenssegers\Blade\Blade as BladeTemplate;


class Blade {

  static function view (string $template, array $data = []) {
    $base = realpath(__DIR__ . '/../../');
    $blade = new BladeTemplate($base . '/resources/views/', $base .'/storage/views/cache/');
    $view = $base . '/resources/views/' . $template . '.blade.php';

    if (file_exists($view)) {
      echo($blade->render($template, $data));
    } else {
      echo "View requested is not found!";
    }

  }

}