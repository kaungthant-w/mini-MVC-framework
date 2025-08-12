<?php
	include_once("db.php");
	$db = new DB();
	$result = $db -> create($_POST);
?>
