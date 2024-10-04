<!DOCTYPE html>
<html lang="es">
<?php 
	include('vista/libreria2.php');
  ?>
<body>
	<?php
		include_once('vista/header.php');
	 ?>
		<div class="content">
			<form action="registro.php" method="POST">
			<p id="register">Registrarse</p>
			<p><input type="text" name="user" placeholder="Ingrese un nombre de usuario" required></p>
			<p><input type="email" name="correo" placeholder="Ingresa un correo" required></p>
			<p><input type="password" name="pass" placeholder="Ingresa una contraseña" required></p>
			<p><input type="password" name="passv" placeholder="Valida la contraseña" required></p>
			<button type="submit" id="boton">Registrarte</button>
			</form>
			<div id="todolist" style="color: white;">
				<?php
					include('conexion/conexion.php');
					include('conexion/insertar.php');
				?>
			</div>
		</div>
	<?php 
		include('vista/footer.php'); ?>	
</body>
</html>