<?php include 'main_header.php';
	  require_once 'controllers/LoginController.php';
?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post"  class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
			<span><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" id="" onfocusout="checkUsername(this)" class="form-control">
			<span id="err_username"></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control">
		</div>
</div>
<script>
	function checkUsername(control){
		var username = control.value;
		//ajax
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText;
				if(rsp == "true"){
					document.getElementById("err_username").innerHTML = "<br>Valid";
				}else{
					document.getElementById("err_username").innerHTML = "<br>Not Valid";
				}
			}
		};
		xhttp.open("GET","checkusername.php?uname="+username,true);
		xhttp.send();
	}
</script>
<!--sign up ends -->
<?php include 'main_footer.php';?>