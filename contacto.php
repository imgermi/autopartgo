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
		<h1><?= __('contacto 0'); ?></h1>
		<h2><?= __('contacto 1'); ?></h2>
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
					<label for="name"><?= __('contacto 2'); ?></label>
					<input type="text" name="name" id="name" placeholder="<?= __('contacto 3'); ?>" value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="email"><?= __('contacto 4'); ?></label>
					<input type="email" name="email" id="email" placeholder="<?= __('contacto 5'); ?>" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>">
				</fieldset>
				<fieldset>
					<?php
					$paises = array(
						"Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"
						);
					 ?>
					<label for="paises"><?= __('contacto 6'); ?></label>
					<select name="paises" id="paises">
						<option value="" selected disabled hidden><?= __('contacto 7'); ?></option>
						<?php foreach ($paises as $pais) {
							echo ' <option value="'.$pais.'" '.((isset($_POST['paises']) AND $_POST['paises']==$pais) ? 'selected' : '').'>'.$pais.'</option> ';
						} ?>
					</select>
				</fieldset>
				<fieldset>
					<label for="mensaje"><?= __('contacto 8'); ?></label>
					<textarea name="mensaje" id="mensaje" placeholder="<?= __('contacto 9'); ?>"><?= isset($_POST['mensaje']) ? $_POST['mensaje'] : ''?></textarea>
				</fieldset>
				<button type="submit" class="yellow-btn" name="enviar_contacto"><?= __('contacto 10'); ?></button>
			</form>
			<?php } ?>

		</article>

		<article class="banda-mapa">
			<div class="js-mapa " data-cargado="false" data-lat="25.8330423" data-lng="-80.3363095" style="height: 400px; z-index: 4000">
				<a href="https://www.google.com.ar/maps/place/8428+NW+66th+St,+Miami,+FL+33166,+USA/@25.8329732,-80.3363095,16.49z/data=!4m5!3m4!1s0x88d9bbc65108c9b5:0x2566c8867fd8a24b!8m2!3d25.8334341!4d-80.334734" style="color: #fff;">
					AutoPartGo! Google Maps
				</a>
			</div>
		</article>

	</div>
</section>

<section class="banda"></section>

<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>