<!DOCTYPE>

<html>
<body>

<?php
	
	function DBquery()
	{
		Echo "Conectando a BBDD <br>";

		$connection =	mysqli_connect("localhost","root","","brazosroboticos");

		if (!$connection) {
			die('No pudo conectarse: ' . mysql_error());
		}
		echo 'Conectado satisfactoriamente';
		
		$result = mysqli_query($connection,"SELECT *  FROM brobotico");

		return $result		
	}	
?>

</body>

</html>