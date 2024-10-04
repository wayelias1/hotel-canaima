<?php
	include('../../conexion/sesion.php');
	include('../../conexion/conexion.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar datos</title>
	<?php include_once('../libreria.php'); ?>
</head>
<body>
	<?php 

	include('header.php');

	$cod = $_GET['id'];

	 $consultaTwo = "SELECT * FROM reservas WHERE id_cuarto = '$cod'";  
	 $result = mysqli_query($conex, $consultaTwo);
 
	?>


	<form action="../../conexion/update.php" method="POST">
		<table width="200" border="1" cellspacing="0" cellpadding="0">
		<?php foreach ($result as $fila) {?>
			<tr>
				<td>ID</td>
				<td><?php echo $cod; ?></td>
			</tr>
			<tr>
				<td>Habitacion</td>
				<td><?php echo $fila['habitacion']?></td>
			</tr>
			<tr>
				<td>Precio</td>
				<td><input type="text" name="newc" value="<?php echo $fila['precio']?>" nkeyup="format(this)" onchange="format(this)"></td>
			</tr>
			<tr>
				<td colspan="2" aling="center"><button type="submit" value="INSERTAR">Guardar cambios</button></td>
			</tr>
		<?php } ?>
		</table>
		<input type="hidden" name="funcion" value="modificar">
		<input type="hidden" name="cod" value="<?php echo $cod; ?>">
	</form>


	<?php include('../footer.php'); ?>
	<script>
		function format(input)
		{
		var num = input.value.replace(/\./g,'');
		if(!isNaN(num)){
		num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
		num = num.split('').reverse().join('').replace(/^[\.]/,'');
		input.value = num;
		}
		 
		else{ alert('Solo se permiten numeros');
		input.value = input.value.replace(/[^\d\.]*/g,'');
		}
		}
	</script>
</body>
</html>