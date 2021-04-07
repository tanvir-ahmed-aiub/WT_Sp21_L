<?php
    session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	require_once "db_config.php";
	
	$query="select * from users";
	$result = get($query);
	
?>
	<table border="1" style="border-collapse:collapse;">
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Type</th>
		</tr>
<?php
	foreach($result as $row){
		echo "<tr>";
		 echo "<td>".$row["id"]."</td>";
		 echo "<td>".$row["username"]."</td>";
		 echo "<td>".$row["type"]."</td>";
		echo "</tr>";
	}
?>
	</table>