<?php
	include('../../conexion/sesion.php');
	include('../../conexion/conexion.php');

	$consulta = "SELECT * FROM reservas";	
	$result = mysqli_query($conex, $consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		include_once('../libreria.php');
	 ?>
	 <script>
	 	function modificar(cod){
	 		window.location="http://localhost/estado/vista/adm/edit.php?id="+cod;
	 	}

	 </script>
</head>
<body>
	<?php include('header.php');?>

	<div class="content"><p>Reservas</p></div>
			<table border="1">
				<tr >
					<td style="color: #03a9f4;">Habitacion</td>
					<td style="color: #03a9f4;">Precio actual</td>
					<td style="color: #ff5722;">Editar</td>
				</tr>
				<?php foreach($result as $fila) { ?>
				<tr>
					<td><?php echo $fila['habitacion'];?></td>
					<td><?php echo $fila['precio'];?></td>
					<td><img src="../../imag/edit.png" width="30" onclick="modificar(<?php echo $fila['id_cuarto'];?>);"></td>
				</tr>
				<?php } ?>
			</table>


		</div>
	<?php include('../footer.php'); ?>	
</body>
</html>

