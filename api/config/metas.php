<?php

/*
* --------------------------------------------------------------------------
* METAS
* --------------------------------------------------------------------------
*
* En "defecto" se definen los valores por defecto para cada metaetiqueta.
*
* En "secciones" se definen los valores pora cada meta por sección. Estos
* pueden sobreescribirse desde la configuración de cada página.
*
* En "plantilla" se define la base para todas la metas en donde {valor} se
* reemplaza por el valor que se le asigna a las metas en "secciones".
*
*/

$empresa = Config::obtener('empresa');

return array(

	'defecto' => array(
		'es' => array(
			'titulo' => '',
			'descripcion' => '',
			'keywords' => '',
			'img' => BASE_URL.'images/favicons/android-chrome-256x256.png',
		)
	),

	'plantilla' => array(
		'titulo' => '{valor} | '. $empresa->nombre,
		'descripcion' => '{valor}',
		'keywords' => '{valor}',
		'img' => '{valor}',
	),

	'secciones' => array(
		'home' => array(
			'es' => array(
				'titulo' => 'Venta de Autopartes a Latinoamérica',
				'descripcion' => 'Brindamos autopartes y repuestos originales a precios accesibles para que pueda realizar la reparación de su vehículo sin problemas. Cotice sus autopartes con número de chasis (VIN) así podremos encontrar el respuesto que busca. ¡Conozcanos!',
				'keywords' => 'autopartes, repuestos, repuestos originales, pastillas de frenos, bancadas, inyectores, radiadores, trenes delanteros, autopartes a pedido, carrocería, suspensión, correas, frenos, aires acondicionados, chasis, baterías, motores, piezas para autos, partes de vehículos, repuestos a pedido, envío de autopartes, venta de autopartes',
				'img' => '',
			),
			'en' => array(
				'titulo' => 'Auto Parts sale to Latin America',
				'descripcion' => 'We provide autoparts and original replacement at lower prices than your local market for you to fix your car with no problems. Send us your chassis number (VIN) to make the quotation for the autopart your are looking for. ¡Meet us!',
				'keywords' => 'autoparts, replacementes, original replacements, autoparts shipping, autoparts sale, breaks, chassis, vin, car engine, supports, beacons, mudguards, relay, car filters, deliver rims, bumpers',
				'img' => '',
			),
		),
		'cotizar' => array(
			'es' => array(
				'titulo' => 'Cotizar',
				'descripcion' => 'Envíe el número de VIN o chasis para poder identificar la autoparte necesaria para su vehículo. ¡Cotice sus repuestos!',
				'keywords' => 'autopartes, repuestos, repuestos originales, envío de autopartes, venta de autopartes',
				'img' => '',
			),
		),
		'nosotros' => array(
			'es' => array(
				'titulo' => 'Nosotros',
				'descripcion' => 'AutopartGo! es el mejor servicio de atención personalizada para repuestos de cualquier vehículo. Ofrecemos un servicio eficaz que resuelve su búsqueda de autopartes en el menor tiempo posible. ¡Conozcanos!',
				'keywords' => 'autopartes, repuestos, repuestos originales, autopartes a pedido, chasis, piezas para autos, partes de vehículos, repuestos a pedido, envío de autopartes, venta de autopartes',
				'img' => '',
			),
		),
		'contacto' => array(
			'es' => array(
				'titulo' => 'Contacto',
				'descripcion' => 'Envíe su formulario para identificar las autopartes a precios accesibles que su vehículo necesita.',
				'keywords' => 'autopartes, repuestos, repuestos originales, envío de autopartes, venta de autopartes',
				'img' => '',
			),
		),
		// Array de ejemplo para agregar si se agrega un página nueva
		// 'nombre-de-la-sección' => array(
		// 	'es' => array(
		// 		'titulo' => '',
		// 		'descripcion' => '',
		// 		'img' => '',
		// 	),
		// ),
	)

);