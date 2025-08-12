<?php
	include_once("db.php");
	$db = new DB();
	$result = $db -> update($_POST);
?>
