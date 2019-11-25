<?php

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class) {
	$path = str_replace('\\', '/', $class.'.php');
	// var_dump($path);
	if (file_exists($path)) {
		require $path;
	}
});

session_start();

$router = new Router;
$router->run();
