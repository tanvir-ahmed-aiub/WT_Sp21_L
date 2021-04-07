<html>
	<head></head>
	<body>
		<p>This is from HTML</p>
		<p id="p1" ></p>
		<button onclick="turn_on()" onmouseout="turn_off()" onmouseover="turn_on()">Turn on</button>
		<img id="pic" src="https://www.w3schools.com/js/pic_bulboff.gif">
		<button onclick="turn_off()"> Turn off</button>
		
		<span>Info</span><img onmouseout="hide_hint()" onmouseover="show_hint()" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Info_icon_002.svg/480px-Info_icon_002.svg.png" height="5px" width="5px">
		<span id="info" style="border:1px dashed black;display:none">This is info </span>
		
		<input type="text" onkeyup="keyUp()" onkeydown="keyDown()">
		
		<p id="key_out">
		
		</p>
	</body>
	<script>
		//document.write("This is from JS");
		//console.log("This is printed in cosole");
		//alert("this is from alert");
		function get(id){
			return document.getElementById(id);
			
		}
		var pic1 = get('pic');
		var info = get('info');
		var key_out = get('key_out');
		var count_up=0;
		var count_down=0;
		function keyUp(){
			key_out.innerHTML = "key up"+ count_up++;
		}
		function keyDown(){
			key_out.innerHTML = "key down"+count_down++;
		}

		function turn_on(){
			pic1.src= 'https://www.w3schools.com/js/pic_bulbon.gif';
		}
		function turn_off(){
			pic1.src= 'https://www.w3schools.com/js/pic_bulboff.gif';
		}
		function show_hint(){
			info.style.display="inline";
		}
		function hide_hint(){
			info.style.display="none";
		}
		var p1 = document.getElementById("p1");
		p1.innerHTML ="This is from JS" ;
	</script>
	
</html>

