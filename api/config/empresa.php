<?php

/*
* ---------------------------------------------------------------------------
* EMPRESA
* ---------------------------------------------------------------------------
*
* Acá ponemos todos los datos de contacto de la empresa así los podemos
* reutilizar en todo el sitio. Podés guardar cualquier dato no solo los que
* están definidos ahora.

Config::obtener('empresa')->fijo_enlace
* 
*/

return array(
	
	'nombre' 	=> 'Autopartgo!',
	'redes' 	=> array(),
	'telefono' 	=> '',
	'email' 	=> ocultarEmail( 'synapsis@synapsis.com.ar' ),
	'direccion' => '',
	'latitud' 	=> '',
	'longitud' 	=> '',

);