<?php
	// include_once("db.php");
	include_once __DIR__ . '/vendor/autoload.php';
	// use Ultis\DB as UltisDB;
	// use App\DB;
	use App\Database;
	
	$db = new Database();
	$result = $db -> insert($_POST);
?>
