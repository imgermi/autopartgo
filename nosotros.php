<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'nosotros');

// Fin configuración de la página //

  include('header.php');

  Plugins::activar('googleMaps');
  Plugins::activar('slick');

?>

<section class="top">
	<div class="container">
		<h1><?= __('nosotros 0'); ?></h1>
		<h2><?= __('nosotros 1'); ?></h2>
	</div>
</section>

<section class="floating-box-container">
	<div class="container">
		<article class="floating-box">
			<h2 class="section-heading"><?= __('nosotros 2'); ?></h2>
			<p><?= __('nosotros 3'); ?></p>
			<p><?= __('nosotros 4'); ?></p>
		</article>
	</div>
</section>

<section class="banda">
	<div class="container">
		<div class="slider-double-container">
			<article class="slider-double">
				<div class="slide" style="background-image: url('images/slider-nosotros/autopartgo-repuestos-gama-autopartes-marcas-modelos.jpg')">
					<img src="images/slider-nosotros/autopartgo-repuestos-gama-autopartes-marcas-modelos.jpg" alt="Amplia gama de repuestos para todas las marcas y modelos">
				</div>
				<div class="slide" style="background-image: url('images/slider-nosotros/autopartgo-autopartes-precios-exportacion-repuestos.jpg')">
					<img src="images/slider-nosotros/autopartgo-autopartes-precios-exportacion-repuestos.jpg" alt="Autopartes a precios de exportación">
				</div>
				<div class="slide" style="background-image: url('images/slider-nosotros/autopartgo-servicio-personalizado-repuestos-autopartes.jpg')">
					<img src="images/slider-nosotros/autopartgo-servicio-personalizado-repuestos-autopartes.jpg" alt="Servicio personalizado de AutopartGo! para cada cliente">
				</div>
			</article>
			<article class="slider-double-nav">
				<div class="slide">
					<h3><?= __('nosotros 5'); ?></h3>
					<p><?= __('nosotros 6'); ?></p>
				</div>
				<div class="slide">
					<h3><?= __('nosotros 7'); ?></h3>
					<p><?= __('nosotros 8'); ?></p>
				</div>
				<div class="slide">
					<h3><?= __('nosotros 9'); ?></h3>
					<p><?= __('nosotros 10'); ?></p>
				</div>
			</article>
		</div>
	</div>
</section>


<section class="banda">
	<div class="container">
		<article class="banda-mapa">
			<div class="js-mapa " data-cargado="false" data-lat="25.771112" data-lng="-80.2910264" style="height: 400px; z-index: 4000">
				<a href="https://www.google.com.ar/maps/place/W+Flagler+St,+Miami,+FL,+USA/@25.771112,-80.2910264,17z/data=!4m5!3m4!1s0x88d9b9ce50c13d81:0x3ef384e65dbb20b0!8m2!3d25.7708028!4d-80.2902754" style="color: #fff;">
					AutoPartGo! Google Maps
				</a>
			</div>
		</article>
	</div>
</section>

<?php include('necesita-asesoria.php'); ?>
<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>