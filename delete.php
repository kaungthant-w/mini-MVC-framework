<?php
	// include_once("db.php");
	include_once __DIR__ . '/vendor/autoload.php';
	use Ultis\DB as UltisDB;
	use App\DB;
	// $db = new DB();
	// die(var_dump($db -> getdatabaseName()));
	
	$db = new UltisDB();
	// dump($db);
	$result = $db -> delete($_GET["id"]);
?>