<!DOCTYPE html>
<html lang="es">
<?php 
	include('vista/libreria2.php');
  ?>
<body>
	<?php
		include_once('vista/header.php');
	 ?>
	 <p>En estas imagenes se puede apreciar la entrada y el edificio del hotel</p>
	 <div id="c-slider">	
			<div id="slider">
				<section><img src="imag/slider1.jpg" alt=""></section>
				<section><img src="imag/slider2.jpg" alt=""></section>
				<section><img src="imag/slider3.jpg" alt=""></section>			
			</div>
			<div id="btn-izq">&#60;</div>
			<div id="btn-der">&#62;</div>	
		</div>
		<p>El Hotel El Conde no solo está en el centro financiero de Caracas sino que tambien lo rodea un gran número de lugares históricos y gubernamentales como lo son:</p>
			<ul id="list">
				<li>La Plaza Bolivar</li>
				<li>La Casa Natal del Libertador</li>
				<li>El Museo Bolivariano</li>
				<li>El Panteon Nacional</li>
				<li>El Congreso de la Republica</li>
				<li>La Gobernacion del D.F.</li>
				<li>La Catedral de Caracas</li>
				<li>El teatro Municipal</li>
				<li>Complejo Cultural Teresa Carreño</li>
				<li>Museo de Bellas Artes</li>
				<li>Museo de los Niños</li>
			</ul>
			
		<script src="javascript/carousel.js"></script>
		
		<?php 
		include('vista/footer.php'); ?>	
</body>
</html>