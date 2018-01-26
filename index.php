<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'home');

// Fin configuración de la página //

  include('header.php');
  Plugins::activar('slick');
?>

<section class="top">
	<div class="container">
		<h1><?= __('home_top 0'); ?></h1>
		<h2><?= __('home_top 1'); ?></h2>
	</div>
</section>

<section class="floating-box-container">
	<div class="container">
		<article class="floating-box">
			<!-- Esto antes era un h3 -->
			<h4 class="section-heading"><?= __('home_realizar_pedido 0'); ?></h4>
			<div class="flex-container">
				<div>
					<img src="images/icons/autopartgo-autopartes-y-repuestos-formulario.svg" alt="Enviar formulario de consulta sobre repuestos">
					<h5><?= __('home_realizar_pedido 1'); ?></h5>
					<p><?= __('home_realizar_pedido 2'); ?></p>
				</div>
				<div>
					<img src="images/icons/autopartgo-autopartes-y-repuestos-contacto.svg" alt="Atención personalizada sobre disponibilidad de autopartes">
					<h5><?= __('home_realizar_pedido 3'); ?></h5>
					<p><?= __('home_realizar_pedido 4'); ?></p>
				</div>
				<div>
					<img src="images/icons/autopartgo-autopartes-y-repuestos-envio.svg" alt="Envío de las autopartes al cliente">
					<h5><?= __('home_realizar_pedido 5'); ?></h5>
					<p><?= __('home_realizar_pedido 6'); ?></p>
				</div>
			</div>
			<a class="yellow-btn" href="<?=url('cotizar')?>"><?= __('home_realizar_pedido 7'); ?></a>
		</article>
	</div>
</section>

<section class="banda medios-pago">
	<div class="container">
		<h4 class="section-heading"><?= __('home_medios_pago 0'); ?></h4>
		<article>
			<div class="inner">
				<img src="images/icons/paypal.svg">
			</div>
			<div class="outer">
				<div class="content">
					<img src="images/icons/paypal.svg">
					<p><?= __('home_medios_pago 1'); ?></p>
				</div>
			</div>
		</article>
		<article>
			<div class="inner">
				<img src="images/icons/contact.svg">
			</div>
			<div class="outer">
				<div class="content">
					<img src="images/icons/contact.svg">
					<p><?= __('home_medios_pago 2'); ?></p>
				</div>
			</div>
		</article>
	</div>
</section>

<section class="banda pictext_box">
	<div class="container">
		<h2 class="section-heading"><?= __('home_autopartgo 0'); ?></h2>
		<img src="images/autopartgo-repuestos-originales-que-es.jpg" alt="AutoPartGo! | Repuestos originales para su vehículo">
		<div class="content">
			<p><?= __('home_autopartgo 1'); ?></p>
			<a class="yellow-btn" href=""><?= __('home_autopartgo 2'); ?></a>
		</div>
	</div>
</section>

<section class="banda">
	<div class="container">
		<div class="slider-double-container">
			<article class="slider-double">
				<div class="slide" style="background-image: url('images/slider-home/autopartgo-repuestos-carroceria-originales.jpg')">
					<img src="images/slider-home/autopartgo-repuestos-carroceria-originales.jpg" alt="Repuestos originales de carrocería para su modelo">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/autopartgo-repuestos-autopartes-suspension-electricidad-aire.jpg')">
					<img src="images/slider-home/autopartgo-repuestos-autopartes-suspension-electricidad-aire.jpg" alt="Repuestos de suspensión, electricidad y aire acondicionado de su vehículo">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/autopartgo-repuestos-interior-vehiculo.jpg')">
					<img src="images/slider-home/autopartgo-repuestos-interior-vehiculo.jpg" alt="Autopartes para el interior de su vehículo">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/autopartgo-repuestos-camionetas-suv-autopartes-camionetas.jpg')">
					<img src="images/slider-home/autopartgo-repuestos-camionetas-suv-autopartes-camionetas.jpg" alt="Autopartes para camionetas 4x4, SUV y todo terreno">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/autopartgo-autopartes-alto-rendimiento-competencia.jpg')">
					<img src="images/slider-home/autopartgo-autopartes-alto-rendimiento-competencia.jpg" alt="Autopartes para vehículos de alto rendimiento y competencia">
				</div>
			</article>
			<article class="slider-double-nav">
				<div class="slide">
					<h3><?= __('home_slider_double 0'); ?></h3>
					<p><?= __('home_slider_double 1'); ?></p>
				</div>
				<div class="slide">
					<h3><?= __('home_slider_double 2'); ?></h3>
					<ul>
						<li><?= __('home_slider_double 3'); ?></li>
						<li><?= __('home_slider_double 4'); ?></li>
						<li><?= __('home_slider_double 5'); ?></li>
					</ul>
				</div>
				<div class="slide">
					<h3><?= __('home_slider_double 6'); ?></h3>
					<p><?= __('home_slider_double 7'); ?></p>
				</div>
				<div class="slide">
					<h3><?= __('home_slider_double 8'); ?></h3>
					<p><?= __('home_slider_double 9'); ?></p>
				</div>
				<div class="slide">
					<h3><?= __('home_slider_double 10'); ?></h3>
					<p><?= __('home_slider_double 11'); ?></p>
				</div>
			</article>
		</div>
	</div>
</section>

<?php include('necesita-asesoria.php'); ?>
<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>