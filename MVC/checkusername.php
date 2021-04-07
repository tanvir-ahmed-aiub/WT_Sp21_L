<?php
	require_once 'controllers/LoginController.php';
	$username=$_GET["uname"];
	$res = checkUsernameValidity($username);
	echo $res;

?>