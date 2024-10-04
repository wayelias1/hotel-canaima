<?php
	include("conexion.php");
	/*$habit = $_POST["normal"];
  $habit = $_POST["doble"]; 
  $habit = $_POST["matrimonial"];
  $habit = $_POST["suite"];
	$precio = precio;
		$consulta = "SELECT * FROM reservas WHERE habitacion = '$habitacion' AND precio = '$precio'";
		$resultado = mysqli_query($conex, $consulta);

      while ($muestra=mysqli_fetch_array($resultado)){
        if($habit = $_POST["normal"]){
          echo $muestra[1];
        }
        elseif ($habit = $_POST["doble"]) {
          echo $muestra[2];
        }
        elseif ($habit = $_POST["matrimonial"]) {
          echo $muestra[3];
        }
        elseif ($habit = $_POST["suite"]) {
          echo $muestra[4];
        }
        else {
          echo "Esa habitacion no existe";
        }
      }
    mysqli_free_result($resultado);
    mysqli_close($conex);
  }*/

//Declaracion de variables
  $newPrice= $_POST['newc'];

//consulta para mostrar los datos actuales
  $consulta = "SELECT * FROM reservas";  
  $result = mysqli_query($conex, $consulta);

//Actualizacion de datos

  $funcion = $_POST['funcion'];
  $cod = $_POST['cod'];

  if($funcion == "modificar"){

    $sql = "UPDATE reservas SET precio = '$newPrice' WHERE id_cuarto = '$cod'";
    mysqli_query($conex, $sql);
    header("location: ../vista/adm/reserva.php");
  }
          
  
?>