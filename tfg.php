<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TFG: Pagina web con webGL sobre brazos roboticos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		
	<script src="libs/jquery-2.1.4.min.js"></script>
	<script src="//use.edgefonts.net/cabin;source-sans-pro:n2,i2,n3,n4,n6,n7,n9.js"></script>
	
	<!--Slipry-->
	<script src="libs/slippry/slippry.min.js"></script>
	<link rel="stylesheet" href="css/slippry.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<!--Bibliotecas-->
	<script src="libs/ThreeJSV71/build/three.min.js"></script>
	<script src="libs/OrbitControls.js"></script>
	<script src="libs/Coordinates.js"></script>
	<script src="libs/dat.gui.min.js"></script>
	<script src="libs/stats.min.js"></script>	
	<script src="libs/ColladaLoader.js"></script>	
	<script>
		$(document).ready(function() {
			$.getScript("js/json.js", function(){
				$( "#go" ).click(function() {			
			})});			
			
			<!--Slipry-->
			var slide = $('#slider2').slippry();			
		});		
	</script>	
	

	


	<font size="+6"><b>TFG</b></font><br>
	<a href="../index.html">Volver a atrás</a>
	
	<form name="framecombo">
	<select name="framecombo2" size=1>
		<option value='blender/json/camara'>camara</option>
		<option value='blender/json/avenger'>Avenger</option>
	  </select>
	  <input type="button" id="go" value="Go!" onclick="setURL(framecombo2.value)"></p>
	</form>

	<hr>
	<section class="wrapper">
		<ul id="slider2">
			<li><img src="images/1.png" />	</li>
			<li><img src="images/2.png" />	</li>
			<li><img src="images/3.png" />	</li>
			<li><img src="images/4.png" />	</li>
			<li><img src="images/KL250-3.png"/>	</li>
			<li><img src="images/KL250-3claw.png" />	</li>
		</ul>
	</section>

	<hr>
	<div id='container' width=800, height=600>	
	</div>
	<br>
</body>
</html>