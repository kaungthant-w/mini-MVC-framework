<?php
	// include_once("db.php");
	require_once __DIR__ . '/vendor/autoload.php';
	// use Ultis\DB as UltisDB;

	// use App\DB;
	use App\Database;
	// $db = new DB();
	// die(var_dump($db -> getdatabaseName()));
	
	$db = new Database();
	$result = $db -> delete($_GET["id"]);
?>