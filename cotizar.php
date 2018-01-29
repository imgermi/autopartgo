<?php

	require_once('api/inicio.php');

	//////////////////////////////////
	/// Configuración de la página ///
	//////////////////////////////////

	define('SECCION', 'cotizar');

	// Fin configuración de la página //

	include('header.php');
	Plugins::activar('slick');

	url('cotizar');
?>

<section class="top">
	<div class="container">
		<h1><?= __('cotizar 0'); ?></h1>
		<h2><?= __('cotizar 1'); ?></h2>
	</div>
</section>

<section class="floating-box-container" id="form">
	<div class="container">
		<article class="floating-box">
			<?php include(API_PATH.'forms/cotizar.php'); ?>
			<?= $form_cotizar->mensaje_estado ?>
			<?php if ($form_cotizar->estado != 'ok') { ?>
			<form method="post" action="<?=url('cotizar')?>#form">
				<p><?= __('cotizar 2'); ?></p>
				<fieldset>
					<label for="name"><?= __('cotizar 3'); ?></label>
					<input type="text" name="name" id="name" placeholder="<?= __('cotizar 4'); ?>" value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="email"><?= __('cotizar 5'); ?></label>
					<input type="email" name="email" id="email" placeholder="<?= __('cotizar 6'); ?>" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>">
				</fieldset>
				<fieldset>
					<?php
					$paises = array(
						"Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"
						);
					 ?>
					<label for="paises"><?= __('cotizar 7'); ?></label>
					<select name="paises" id="paises">
						<option value="" selected disabled hidden><?= __('cotizar 8'); ?></option>
						<?php foreach ($paises as $pais) {
							echo ' <option value="'.$pais.'" '.((isset($_POST['paises']) AND $_POST['paises']==$pais) ? 'selected' : '').'>'.$pais.'</option> ';
						} ?>
					</select>
				</fieldset>
				<p><?= __('cotizar 9'); ?></p>
				<fieldset>
					<label for="marca"><?= __('cotizar 10'); ?></label>
					<input type="text" name="marca" id="marca" placeholder="<?= __('cotizar 11'); ?>" value="<?= isset($_POST['marca']) ? $_POST['marca'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="modelo"><?= __('cotizar 12'); ?></label>
					<input type="text" name="modelo" id="modelo" placeholder="<?= __('cotizar 13'); ?>" value="<?= isset($_POST['modelo']) ? $_POST['modelo'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="ano"><?= __('cotizar 14'); ?></label>
					<input type="number" name="ano" id="ano" placeholder="<?= __('cotizar 15'); ?>" value="<?= isset($_POST['ano']) ? $_POST['ano'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="vin"><?= __('cotizar 16'); ?></label>
					<input type="number" name="vin" id="vin" placeholder="<?= __('cotizar 17'); ?>" value="<?= isset($_POST['vin']) ? $_POST['vin'] : ''?>">
				</fieldset>
				<fieldset>
					<label for="info_respuestos"><?= __('cotizar 18'); ?></label>
					<textarea name="info_respuestos" id="info_respuestos" placeholder="<?= __('cotizar 19'); ?>"><?= isset($_POST['info_respuestos']) ? $_POST['info_respuestos'] : ''?></textarea>
				</fieldset>
				<button type="submit" class="yellow-btn" name="enviar_cotizar"><?= __('cotizar 20'); ?></button>
			</form>
			<?php } ?>
			<small><?= __('cotizar 21'); ?></small>
		</article>

	</div>
</section>

<?php include('necesita-asesoria.php'); ?>
<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>