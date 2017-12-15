<?php

/**
* Archivo de idioma
*
* Las traducciones se agregan de a una con el formato 'clave' => 'valor'.
* Las claves no se pueden repetir asi que conviene ponerles un prefijo.
* Además no puede haber arrays dentro de este array.
* 
* @example
*  // HOME
* 'home-titulo' => 'Título de la home',
* 'home-bajada' => 'Lorem ipsum	dolor sit amet...',
* 
* // CONTACTO
* 'contacto-titulo' => 'Contáctenos',
* ...
*
* Estas traducciones se pueden acceder desde el sitio usando la función __(), el 
* alias del helper "Traduccion".
*
* @example
* echo __('msj-incompleto'); // Todos los campos con asterisco (*) son requeridos.
* 
* @example 
* Traducción:
* 'nav' => array(
*   'home' => 'Home'.
*   'contacto' => 'Contacto'.
* );
*
* Obtener traducción:
* __('nav contacto');
*
*
*/

return array(

	'nav' => array(
		'Home',
		'Cotizar',
		'Nosotros',
		'Contacto',
		'Medios de pago',
		'Términos y Condiciones' 
	),

	'footer' => array(
		'Seguinos',
		'Contactanos',
	),

	// HOME
	'home_top' => array(
		'Envíos de autopartes a todo <strong>Latinoamérica</strong>.',
		'Brindamos nuestros servicios para que pueda conseguir sus autopartes a precios más bajos que el mercado local.'
	),
	'home_realizar_pedido' => array(
		'¿Cómo realizar un pedido?',
		'Envíe su formulario',
		'Con la información de su búsqueda comenzamos a identificar el repuesto que está esperando.',
		'Contacto personalizado',
		'Hablamos directamente con usted para poder asesorarle sobre la disponibilidad de la autoparte que busca.',
		'Envío realizado',
		'Su repuesto ya estará en camino. Estaremos contactándonos con usted para corroborar que su pieza llegue en tiempo y forma.',
		'Cotizar autopartes'
	),
	'home_medios_pago' => array(
		'Medios de pago',
		'Paypal',
		'Comuníquese con un representante',
	),
	'home_autopartgo' => array(
		'¿Qué es AutoPartGo?',
		'En AutopartGo! enviamos piezas originales compatibles con tu automóvil; pueden enviarse reemplazos de carrocería, interiores, suspensión, piezas de alto rendimiento y demás repuestos necesarios para el funcionamiento óptimo de cada modelo. Tan solo con un número de chasis y el modelo específico, podemos comenzar nuestra localización del repuesto que usted busca.',
		'Nosotros'
	),
	'home_slider_double' => array(
		'Carrocería',
		'Trabajamos con repuestos de carrocería originales y de reemplazo para lograr la misma calidad que tenían las piezas de su modelo; trabajamos con ópticas, soportes, faros, frentes, pisos, zócalos, chasis, guardabarros y más.',
		'Suspensión, electricidad y aire acondicionado',
		'Pueden importarse resortes, amortiguadores, embragues y diferentes soportes de suspensión que mejor se adapten a la dirección de su modelo.',
		'Pueden proveerse cables, fusibles, relay y conectores para la electricidad de su vehículo.',
		'Correspondientes condensadores, filtros y válvulas compatibles con el sistema de aire acondicionado de tu modelo.',
		'Interior',
		'Podemos brindarle diferentes soluciones para los repuestos del interior de su automóvil: paneles interiores de puertas, faldones traseros, bolsas de aire, cinturones de seguridad, interruptores, molduras internas, y mucho más.',
		'Camionetas y SUV',
		'Podemos localizar diferentes repuestos para camionetas 4x4, 4x2, todo terreno y SUV. Desde llantas, paragolpes, protecciones y neumáticos, podemos ofrecer cualquier autoparte personalizada para su requerimiento.',
		'Alto rendimiento y competencias',
		'Repuestos para amplificar la respuesta de los componentes del sistema de frenos, protección contra la ebullición y posterior perdida de eficiencia de altas temperaturas. Estas piezas brindadas por <strong>AutopartGo!</strong> proporcionan un frenado mas rápido, firme y consistente en la performance de la competencia.'
	),

	// Cotizar
	'cotizar' => array(
		'<strong>Cotizar</strong> <br> autopartes',
		'Podemos hacer llegar cualquier tipo de piezas desde AutopartGo! a todo Latinoamérica. Complete el formulario para que podamos asesorarlo lo más rápido posible.',
		'Datos personales',
		'Nombre*',
		'Ingrese su nombre aquí',
		'Email*',
		'Ingrese su email aquí',
		'País*',
		'Seleccione un país',
		'Datos de su vehículo',
		'Marca*',
		'Ingrese la marca aquí',
		'Modelo*',
		'Ingrese el modelo aquí',
		'Año*',
		'Ingrese el año aquí',
		'Número de chasis (VIN)*',
		'Ingrese el VIN aquí',
		'Información de repuestos*',
		'Escriba la información de repuestos',
		'Enviar'
	),

	// Necesita asesoría
	'necesita_asesoria' => array(
		'¿Necesita asesoría?',
		'¿No sabe exactamente que repuesto busca? Póngase en contacto con nosotros y le asesoraremos para poder identificar la pieza que su vehículo necesita.',
		'Contacto'
	),
								
	'msj-incompleto'       => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-error'            => 'El email ingresado es inválido. Por favor, vuelva a ingresarlo.',
	'msj-mail_invalido'    => 'El captcha no fue completado correctamente. Vuelva a intentarlo',
	'msj-captcha_invalido' => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-ok'               => 'Su mensaje ha sido enviado, muchas gracias por comunicarse con nosotros.<br /> breve nos pondremos en contacto con Ud.',
);

