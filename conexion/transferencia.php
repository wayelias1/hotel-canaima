<?php
	include("conexion.php");

  if(isset($_POST['nombre'])){
	$nombre = $_POST['nombre'];
  $pago = $_POST['pago'];
  $fecha = $_POST['fecha'];


  if(empty($nombre) || empty($pago) || empty($fecha))
        {
          echo '<p>error un campo esta vacio</p>';
          die();
        }
	$consulta = "INSERT Into transferencia(nombre, pago, fecha) values ('$nombre','$pago', '$fecha')";
	if(mysqli_query($conex, $sql)){
        echo "<h1>Pago realizado</h1>";
    } 
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conex);
    }
    mysqli_close($conex);
  } 
  ?>  