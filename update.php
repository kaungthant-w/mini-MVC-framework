<?php
	// include_once("db.php");
	include_once __DIR__ . '/vendor/autoload.php';
	use Ultis\DB as UltisDB;
	use App\DB;
	$db = new UltisDB();
	$result = $db -> update($_POST);
?>
