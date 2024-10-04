<?php
include("conexion.php");
	session_start();
	if(isset($_POST['user'])){
	$usuario = $_POST['user'];
	$password = $_POST['pass'];
	$_SESSION['usuario'] = $usuario;

	$consulta = "SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$password'";
	$resultado = mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas > 0 ) {

		$query = $conex->query("SELECT tipo FROM usuarios WHERE user = '$usuario'");
		$dato = $query->fetch_array();
		$tipo = $dato[0];
			if($tipo == 1) {
    			header("Location: ../vista/usuario/index.php");
   		}	
   			elseif($tipo == 5) {
    			header("Location: ../vista/adm/index.php");
   	 	}
   			 else {
		    	header("Location: ../entrar.php");
		    	echo "Este usuario no existe";
		};
	
}
	else{
		echo "El usuario y/o contraseña son incorrectos";
	}

mysqli_free_result($resultado);
mysqli_close($conex);

}
?>