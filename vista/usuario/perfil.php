<?php
	include('../../conexion/conexion.php');
	include('../../conexion/sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Hotel el conde</title>
	<link rel="stylesheet" type="text/JavaScript" href="javascript/carousel.js">
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../css/slider.css">
	<script type="text/javascript" src="../../javascript/query.js"></script>
</head>
<body>
	<?php 
		include('header.php');
	 ?>
			
	<h2 style="color: white; text-transform: capitalize;"><?php echo 'Bienvenid@ '.$row['user']; ?></h2>
	<p id="text">Imagen de perfil:</p>
	<div id="modii"><img  id="imagen" src="../../imag/perfil.jpg"></div>
	<div id="perfil-nc">
	<p><input type="" name="" placeholder="Ingresa tu contraseña actual"></p>
	<br>
	<p><input type="" name="" placeholder="Ingresa la contraseña nueva"></p>
	<p><input type="" name="" placeholder="Verifica la contraseña nueva"></p>
	</div>
	<div><select>
		
	</select></div>
	<?php 
		include('../footer.php'); ?>	
</body>
</html>