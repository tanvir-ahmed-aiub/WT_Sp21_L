<?php
	$arr = array();
	$arr[0] = 1;
	$arr[] = 2;
	$arr[] = 3;
	
	for($i=0;$i<count($arr);$i++){
		echo "$arr[$i] ";
	}
	echo "<br>";
	foreach($arr as $ar){
		
		echo "$ar ";
	}
	echo "<br>";
	$assoc = array();
	$assoc2 = array("t"=>12,"w"=>23);
	$assoc["karim"] = 32;
	$assoc["rahim"] = 33;
	$assoc["tanvir"] = 34;
	$assoc["sabbir"] = 35;
	
	foreach($assoc as $k=>$v){
		echo "$v<br>";
		echo $assoc[$k]."<br>";
		echo "key $k and value $v<br>";
	}
	echo "<pre>";
	print_r($assoc);
	echo "</pre>";
?>