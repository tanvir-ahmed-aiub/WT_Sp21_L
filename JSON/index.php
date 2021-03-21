<?php
	/*$arr = array("username"=>"Rahim","password"=>"123456","type"=>1);
	$var = json_encode($arr);
	echo $var;

	//var_dump($var);
	//$st = "[1,2,3,4,5]";
	//$sra=json_decode($st);
	//echo"<pre>";
	//var_dump($sra);
	//echo"</pre>";
	 $sr = json_decode($var);
	 var_dump($sr);*/
	 /*class Student{
		public $name;
		public $id;
		
		public function ShowInfo(){
			echo "$this->name";
		}
		
		public function __construct($name){
			$this->name=$name;
		}
	}
	$stu = new Student("Tanvir");
	
	$stu->ShowInfo();*/
	$json='[
			 {
				"username":"Tanvir",
				"password":"12345"
			 },
			 {
				"username":"Sabbir",
				"password":"123456"
			 }
			]';
	$users=json_decode($json);
	foreach($users as $user){
		echo "$user->username => $user->password<br>";
	}
?>
