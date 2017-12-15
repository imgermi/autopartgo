<?php

	require_once('api/inicio.php');

	//////////////////////////////////
	/// Configuración de la página ///
	//////////////////////////////////

	define('SECCION', 'contacto');

	// Fin configuración de la página //

	include('header.php');
	Plugins::activar('googleMaps');
	Plugins::activar('slick');
?>

<section class="top">
	<div class="container">
		<h1>Envíe su consulta</h1>
		<h2>Pónganse en contacto con nosotros y lo asesoraremos para <br> poder identificar la pieza que su vehículo necesita.</h2>
	</div>
</section>

<section class="floating-box-container" id="form">
	<div class="container">
		<article class="floating-box">
			<?php include(API_PATH.'forms/contacto.php'); ?>
			<?= $form_contacto->mensaje_estado ?>
			<?php if ($form_contacto->estado != 'ok') { ?>
			<form method="post" action="<?=url('contacto')?>#form">
				<fieldset>
					<label for="name">Nombre*</label>
					<input type="text" name="name" id="name" placeholder="Ingrese su nombre aquí" value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="email">Email*</label>
					<input type="email" name="email" id="email" placeholder="Ingrese su email aquí" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>">
				</fieldset>
				<fieldset>
					<?php 
					$paises = array(
						'Enero',
						'Febrero',
						'Marzo',
						'Abril',
						'Mayo',
						'Junio',
						'Julio',
						'Agosto',
						'Septiembre',
						'Octubre',
						'Noviembre',
						'Diciembre'
						);
					 ?>
					<label for="paises">País*</label>
					<select name="paises" id="paises">
						<option value="" selected disabled hidden>Seleccione un país</option>
						<?php foreach ($paises as $pais) {
							echo ' <option value="'.$pais.'" '.((isset($_POST['paises']) AND $_POST['paises']==$pais) ? 'selected' : '').'>'.$pais.'</option> ';
						} ?>
					</select>
				</fieldset>
				<fieldset>
					<label for="mensaje">Mensaje*</label>
					<textarea name="mensaje" id="mensaje" placeholder="Escriba su mensaje"><?= isset($_POST['mensaje']) ? $_POST['mensaje'] : ''?></textarea>
				</fieldset>
				<button type="submit" class="yellow-btn" name="enviar_contacto">Enviar</button>
			</form>
			<?php } ?>	
			
		</article>

		<article class="banda-mapa">	
			<div class="js-mapa " data-cargado="false" data-lat="25.771112" data-lng="-80.2910264" style="height: 400px; z-index: 4000">
				<a href="https://www.google.com.ar/maps/place/W+Flagler+St,+Miami,+FL,+USA/@25.771112,-80.2910264,17z/data=!4m5!3m4!1s0x88d9b9ce50c13d81:0x3ef384e65dbb20b0!8m2!3d25.7708028!4d-80.2902754" style="color: #fff;">
					AutoPartGo! Google Maps
				</a>
			</div>
		</article>

	</div>
</section>

<section class="banda"></section>

<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>