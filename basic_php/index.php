<?php
	$a = 10;
	$b = 10.6;
	$c = "Tanvir";
	$sum = $a + $b;
	echo "The sum is $sum";
	$sub = $b - $a;
	echo 'The sub is '.$sub .'<br>';
	
	for($i=0; $i<10;$i++){
		echo $i+1 . "<br>";
	}
	$age = 15;
	if($age < 18){
		echo "You can not cast vote";
	}
	else{
		echo "You can cast";
	}
	
	
?>
<html>
	<head></head>
	<body>
		<?php echo "<h1>Welcome to Server Client Model in PHP</h1>"; ?>
		<?php
			echo "Hello from PHP";
		?>
	</body>
</html>

<?php
	echo "After HTML";
?>