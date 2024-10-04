<?php
	include('../../conexion/sesion.php');

?>
<!DOCTYPE html>
<html lang="es">
<?php
		include_once('../libreria.php');
	 ?>
<body>
	<?php 
		include('header.php');
	 ?>
		<div id="galeria">
		  <div><img src="../../imag/foto1.jpg"></div>
		  <div><img src="../../imag/foto2.jpg"></div>
	      <div><img src="../../imag/foto3.jpg"></div>
		  <div><img src="../../imag/foto4.jpg"></div>
		</div>
		<div id="galeria">
		  <div><img src="../../imag/foto5.jpg"></div>
		  <div><img src="../../imag/foto6.jpg"></div>
		  <div><img src="../../imag/foto7.jpg"></div>
		  <div><img src="../../imag/foto8.jpg"></div>
		</div>
		<div id="galeria">
		  <div><img src="../../imag/foto9.jpg"></div>
		  <div><img src="../../imag/foto10.jpg"></div>
		  <div><img src="../../imag/foto11.jpg"></div>
		  <div><img src="../../imag/foto12.jpg"></div>
		</div>
		<div id="galeria">
		  <div><img src="../../imag/foto13.jpg"></div>
		  <div><img src="../../imag/foto14.jpg"></div>
		  <div><img src="../../imag/foto15.jpg"></div>
		  <div><img src="../../imag/foto16.jpg"></div>
		</div>
		<div id="galeria">
		  <div><img src="../../imag/foto17.jpg"></div>
		  <div><img src="../../imag/foto18.jpg"></div>
		  <div><img src="../../imag/foto19.jpg"></div>
		  <div><img src="../../imag/foto20.jpg"></div>
		</div>
		<div id="galeria">
		  <div><img src="../../imag/foto21.jpg"></div>
		  <div><img src="../../imag/foto22.jpg"></div>
		  <div><img src="../../imag/foto23.jpg"></div>
		  <div><img src="../../imag/foto24.jpg"></div>
		</div>
	<?php 
		include('../footer.php'); ?>	
		<script type="text/javascript">
			$('#galeria div img').click(function(){
				$(this).addClass('img-active')
				setTimeout(()=>{
					$(this).removeClass('img-active')
				},2400)
			});
		</script>
</body>
</html>