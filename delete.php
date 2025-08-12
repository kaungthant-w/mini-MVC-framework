<?php
	include_once("db.php");
	$db = new DB();
	$result = $db -> delete($_GET["id"]);
?>