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
			<h3><?= __('home_realizar_pedido 0'); ?></h3>
			<div class="flex-container">
				<div>
					<img src="images/icons/send-form.svg">  
					<h5><?= __('home_realizar_pedido 1'); ?></h5>
					<p><?= __('home_realizar_pedido 2'); ?></p>
				</div>
				<div>
					<img src="images/icons/chat.svg">
					<h5><?= __('home_realizar_pedido 3'); ?></h5>
					<p><?= __('home_realizar_pedido 4'); ?></p>
				</div>
				<div>
					<img src="images/icons/delivery-truck.svg">
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
		<h3><?= __('home_medios_pago 0'); ?></h3>
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
		<h3><?= __('home_autopartgo 0'); ?></h3>
		<img src="images/que-es-autopartgo.jpg">
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
				<div class="slide" style="background-image: url('images/slider-home/carroceria.jpg')">
					<img src="images/slider-home/carroceria.jpg">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/suspension.jpg')">
					<img src="images/slider-home/suspension.jpg">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/interior.jpg')">
					<img src="images/slider-home/interior.jpg">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/suv.jpg')">
					<img src="images/slider-home/suv.jpg">
				</div>
				<div class="slide" style="background-image: url('images/slider-home/alto-rendimiento.jpg')">
					<img src="images/slider-home/alto-rendimiento.jpg">
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