<?php
	require_once 'models/db_config.php';
	//declare validation variables
	if(isset($_POST["add_category"])){
		//do validation
		insertCategory($_POST["name"]);
	}
	
	function insertCategory($name){
		$query = "insert into categories values(NULL,'$name')";
		execute($query);
		header("Location: allcategories.php");
	}
	function getCategory($id){
		$query = "select * form categories where id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllCategories(){
		$query = "select * from categories";
		$result = get($query);
		return $result;
	}
?>