<?php


class HomeController {
	public function index()
	{
		echo "index page";
	}

	public function show()
	{
		echo "show page";
	}

	public function create()
	{
		echo "create page";
	}

	public function edit()
	{
		echo "edit page";
	}

	public function update() 
	{
		echo "update page";
	}

	public function delete()
	{
		echo "delete page";
	}
}

class TestController
{
	public function test()
	{
		echo "test TestController site";
	}
}

function notFound() {
	echo "not found page";
}


// die(var_dump($_SERVER["PATH_INFO"]));
$route = $_SERVER["PATH_INFO"];

// die(var_dump($route));


$routes = [
	'/index' => [HomeController::class, "index"],
	"/show" => [HomeController::class, "show"],
	"/create" => [HomeController::class, "create"],
	"/update" => [HomeController::class, "update"],
	"/delete" => [HomeController::class, "delete"],
	"/test" => [TestController::class, "test"]
];
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