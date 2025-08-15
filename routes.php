<?php
	use Symfony\Component\Routing\Route;
	use Symfony\Component\Routing\RouteCollection;
	use App\Controllers\StudentController;

	$routes = new RouteCollection();

	$routes->add('index', new Route('/students', [
		'_controller' =>  [StudentController::class, "index"]
		]
	));

	$routes->add('show', new Route('/student/{id}', [
		'_controller' =>  [StudentController::class, "show"]
		]
	));


	$routes->add('create', new Route('/students/create', [
		'_controller' =>  [StudentController::class, "create"]
		]
	));

	$routes->add('store', new Route('/students/store', [
		'_controller' =>  [StudentController::class, "store"]
		]
	));

	$routes->add('edit', new Route('/students/edit/{id}', [
		'_controller' =>  [StudentController::class, "edit"]
		]
	));

	$routes->add('update', new Route('/students/update', [
		'_controller' =>  [StudentController::class, "update"]
		]
	));

	$routes->add('delete', new Route('/students/delete/{id}', [
		'_controller' =>  [StudentController::class, "delete"]
		]
	));

	?>