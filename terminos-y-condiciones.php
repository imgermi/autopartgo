<?php

	require_once('api/inicio.php');

	//////////////////////////////////
	/// Configuración de la página ///
	//////////////////////////////////

	define('SECCION', 'terminos-y-condiciones');

	// Fin configuración de la página //

	include('header.php');
	Plugins::activar('slick');

	url('terminos-y-condiciones');
?>

<section class="top">
	<div class="container">
		<h1><?= __('terminos 0'); ?></h1>
	</div>
</section>

<section class="banda">
	<div class="container">

	</div>
</section>

<?php include('necesita-asesoria.php'); ?>
<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>