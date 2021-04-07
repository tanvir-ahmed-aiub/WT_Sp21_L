<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$hasError = false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "<br>Name required";
		}else{
			$name = $_POST["name"];
		}
	    //other validations
		if(!$hasError){
			insertUser($name,$_POST["username"],$_POST["password"],$_POST["email"]);
		}
	}
	if(isset($_POST["btn_login"])){
		if(authenticateUser($_POST["username"],$_POST["password"])){
			header("Location: dashboard.php");
		}
		echo "Invalid usrename or password";
	}
	
	function insertUser($name,$username,$password,$email){
		$query = "INSERT INTO users VALUES (NULL,'$name','$username','$password','$email')";
		execute($query);		
	}
	function authenticateUser($username,$password){
		$query = "select * from users where username='$username' and password='$password'";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;	
	}
	function checkUsernameValidity($username){
		$query = "select * from users where username='$username'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
?>