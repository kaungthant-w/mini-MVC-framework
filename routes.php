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


	// die(var_dump($_SERVER["PATH_INFO"]));
	if(array_key_exists("PATH_INFO", $_SERVER)) {
		$route = $_SERVER["PATH_INFO"];
	} else {
		$route = "/index";
	}

	// die(var_dump($route));

	// die(var_dump($routes[$route]));


	if(array_key_exists($route, $routes)) {
		$controller = $routes[$route][0];
		$method = $routes[$route][1];
	} else {
		notFound();
		die();
	}


	$page = new $controller();
	$page -> $method();