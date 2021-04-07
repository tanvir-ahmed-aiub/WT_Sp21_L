<html>
	<body>
		<button onclick="viewNormalReg()">Register Normal</button>
		<button onclick="viewGoogleReg()">Register with google</button>
		<div id="n_reg">
			<h1>Registration Normal</h1>
			<form  action="" method="post" onsubmit="return validate()">
				Name: <input type="text"  id="name" name="name"><span id="err_name"></span><br>
				Uname: <input type="text" id="username" name="uname"><span id="err_uname"></span><br>	
				Password: <input type="password" id="password" name="password"><span id="err_password"></span><br>	
				<input type="submit" name="reg">
			</form>
	     </div>
		
		
		<div id="f_reg" style="display:none">
		<h1>Registration Google</h1>
			<form  >
				Gmail: <input type="text" id="username2" name="uname"><span id="err_uname"></span><br>	
				Password: <input type="password" id="password2" name="password"><span id="err_password"></span><br>
				<input type="submit" name="greg">
			</form>
		</div>
		
		
	</body>
	<script>
		function get(id){
			return document.getElementById(id);
		}
		
		function viewNormalReg(){
			get("f_reg").style.display="none";
			get("n_reg").style.display="block";
		}
		
		function viewGoogleReg(){
			get("n_reg").style.display="none";
			get("f_reg").style.display="block";
		}
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("name").value == ""){
				
				get("err_name").innerHTML="Name Required";
				get("err_name").style.color="red";
				hasError=true;
				//err_msg += "*Name Required<br>";
			}
			if(get("username").value == ""){
				get("err_uname").innerHTML="Username Required";
				hasError=true;
				//err_msg += "*Username Required<br>";
			}
			if(get("password").value == ""){
				get("err_password").innerHTML="Password Required";
				hasError=true;
				//err_msg += "*Password Required<br>";
			}
			//alert(err_msg);
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_uname").innerHTML="";
			get("err_password").innerHTML="";
		}
	</script>
</html>