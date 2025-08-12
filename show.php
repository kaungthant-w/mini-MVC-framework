<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
use App\Utils\Database;

// die(var_dump($request));
// dd($request);
// dump($request);
// dump($request->query->all());
// dump($request->query->get("name"));


?>