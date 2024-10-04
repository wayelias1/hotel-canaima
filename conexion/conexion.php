<?php
	$user="root";
	$pass="";
	$server="localhost";
	$db="canaimabd";
	$conex=mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos.".mysqli_error());
	mysqli_select_db($conex, $db);

	
?>