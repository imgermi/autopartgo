<?php

	require_once('api/inicio.php');

	//////////////////////////////////
	/// Configuración de la página ///
	//////////////////////////////////

	define('SECCION', 'medios-de-pago');

	// Fin configuración de la página //

	include('header.php');
	Plugins::activar('slick');

	url('medios-de-pago');
?>

<section class="top">
	<div class="container">
		<h1><?= __('medios 0'); ?></h1>
	</div>
</section>

<section class="banda">
	<div class="container">

	</div>
</section>

<?php include('necesita-asesoria.php'); ?>
<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>