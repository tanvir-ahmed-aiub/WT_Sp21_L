<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="wt_sp21_l";
	$conn = mysqli_connect($server,$user,$password,$db);
	if($conn){
		echo "Connected";
	}
	else{
		echo mysqli_connect_error();
	}
	
	$query="insert into users values(NULL,'akram','4567','user')";
	if(mysqli_query($conn,$query)){
		echo "Inserted";
	}else{
		echo "Problem";
	}
?>