<?php
	use App\Controllers\StudentController;

	$routes = [
		'/index' => [StudentController::class, "index"],
		"/show" => [StudentController::class, "show"],
		"/store" => [StudentController::class, "store"],
		"/create" => [StudentController::class, "create"],
		"/edit" => [StudentController::class, "edit"],
		"/update" => [StudentController::class, "update"],
		"/delete" => [StudentController::class, "delete"]
	];


	if(array_key_exists("PATH_INFO", $_SERVER)) {
		$route = $_SERVER["PATH_INFO"];
	} else {
		$route = "/index";
	}

	if(array_key_exists($route, $routes)) {
		$controller = $routes[$route][0];
		$method = $routes[$route][1];
	} else {
		notFound();
		die();
	}


	$page = new $controller();
	$page -> $method();