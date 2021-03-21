<?php
  	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$err_message="";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hassError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if(!$hasError){
			$found=false;
			foreach($users as $u=>$p){
				if($u==$uname && $p==$pass){
					
					header("Location: dashboard.php");
				}
			}
			$err_message="Invalid username or password";		
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	</head>
	<body>
		<!--<div class="left-menu">
			<ul>
				<li><a href="">Learn hTML</a></li>
				<li><a href="">Learn CSS</a></li>
				<li><a href="">Learn BootStrap</a></li>
			</ul>
		</div>-->
		<div class="header my-font"  class="my-font" >Header</div>
		
		<div class="login-div">
		
			
			<table align="center">
				<tr>
					<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span></td>
				</tr>
				<tr>
					<td><img src="resources/user.jpg" width="150px" height="150px"></td>
					<td><h1 align="center" style="font-family:verdana;">Login Form</h1></td>
				</tr>
			</table>
			<form action="" method="post">
				<table align="center">
					<tr>
						<td><span class="my-font">Username:</span> </td>
						<td><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
						<br><span class="err-msg"><?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td><span class="my-font">Password: </span></td>
						<td><input class="my-font my-text-field" type="password" placeholder="password"  name="pass">
						<br><span class="err-msg"><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input class="btn-mine my-font" type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>
		</div>
		
		
		<div class="footer my-font">Footer</div>
	</body>
</html>