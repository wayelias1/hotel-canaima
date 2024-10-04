<?php
include("conexion.php");

	if(isset($_POST['user'])){
		$user= $_POST['user'];
		$correo= $_POST['correo'];
		$pass= $_POST['pass'];
		$pass2 = $_POST['passv'];
		$tipo = "usuario";

		if(empty($user) || empty($correo) || empty($pass))
  			{
  				echo '<p>error el campo esta vacio</p>';
  				die();
  			}

  		if ($pass <> $pass2) {
				echo "<p>error la contraseña no coincide con la verificación</p>";
				die();
				}  	
  		
		$sql= "INSERT INTO usuarios(user, correo, pass, tipo) VALUES ('$user', '$correo', '$pass', '$tipo')";

		if(mysqli_query($conex, $sql)){
     	 	echo "<p>Datos guardados</p>";
		} 
		else{
    		echo "Error en el registro";
		}
		mysqli_close($conex);
	}		
?>	
<!--.$sql."<br>".mysqli_error($conex);-->