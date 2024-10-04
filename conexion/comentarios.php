<?php
include("conexion.php");

	if(isset($_POST['nombre'])){
		$nombre= $_POST['nombre'];
		$correo= $_POST['correo'];
		$pass= $_POST['comentario'];

		if(empty($user) || empty($correo) || empty($pass))
  			{
  				echo '<p>error un campo esta vacio</p>';
  				die();
  			} 	
  		
		$sql= "INSERT INTO comentarios(nombre, correo, comentario) VALUES ('$user', '$correo', '$comentario')";

		if(mysqli_query($conex, $sql)){
     	 	echo "<p>Mensaje enviado</p>";
		} 
		else{
    		echo "<p>Error en los datos</p>";
		}
		mysqli_close($conex);
	}		
?>