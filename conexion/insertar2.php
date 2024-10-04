<?php
include("conexion.php");

	if(isset($_POST['user'])){
		$user= $_POST['user'];
		$correo= $_POST['correo'];
		$pass= $_POST['pass'];
		$pass2 = $_POST['passv'];
		$token = $_POST['token'];
		$tipo = "admin";
		$token = "kl2";

		if(empty($user) || empty($correo) || empty($pass) || empty($token)) 
  			{
  				echo '<p>error el campo esta vacio</p>';
  				die();
  			}

  		if ($pass <> $pass2) {
				echo "<p>error la contraseña no coincide con la verificación</p>";
				die();
				} 
		if ($token <> "kl2") {
				echo "<p>error el codigo no coincide</p>";
				die();
				}  		 	
  		
		$sql= "INSERT INTO usuarios(user, correo, pass, tipo) VALUES ('$user', '$correo', '$pass', '$tipo')";

		if(mysqli_query($conex, $sql)){
     	 	echo "Datos guardados";
		} 
		else{
    		echo "Error: ".$sql."<br>".mysqli_error($conex);
		}
		mysqli_close($conex);
	}		
?>	
