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
		'Venta de autopartes a todo <strong>Latinoamérica</strong>.',
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
		'En AutopartGo! vendemos y enviamos piezas originales o alternativas compatibles con tu automóvil; pueden enviarse reemplazos de carrocería, interiores, suspensión, piezas de alto rendimiento y demás repuestos necesarios para el funcionamiento óptimo de cada modelo. Tan solo con un <strong>número de chasis (VIN)</strong> y el modelo específico, podemos comenzar nuestra localización del repuesto que usted busca.',
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
		'Podemos brindarle diferentes soluciones para los repuestos del interior de su automóvil: paneles interiores de puertas, faldones traseros, interruptores, molduras internas, y mucho más.',
		'Camionetas y SUV',
		'Podemos localizar diferentes repuestos para camionetas 4x4, 4x2, todo terreno y SUV. Desde llantas, paragolpes, protecciones, podemos ofrecer cualquier autoparte personalizada para su requerimiento.',
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
		'Enviar',
		'La responsabilidad de AutopartGo! se limita al envío del producto desde Miami a su respectivo País. El sistema del courier elegido o de transporte será el responsable de la integridad de las piezas durante el traslado de las mismas hacia su destino final del comprador.'
	),

	// Nosotros
	'nosotros' => array(
		'<strong>Nosotros</strong>',
		'AutopartGo! es el mejor servicio de atención personalizada para repuestos de cualquier vehículo. Ofrecemos un servicio eficaz que resuelve su búsqueda de autopartes en el menor tiempo posible.',
		'Bienvenido a AutoPartGo!',
		'Entregamos piezas originales o alternativas compatibles con tu automóvil; pueden enviarse reemplazos de carrocería, interiores, suspensión, piezas de alto rendimiento y demás repuestos necesarios para el funcionamiento óptimo de cada modelo. Cuanta más información nos brinde de su búsqueda, más rápida va a ser la localización de la autoparte. Con especificaciones breves como un número de chasis y el modelo específico de su vehículo, podemos empezar a identificar el repuesto pretendido.',
		'Con la dificultad que se presenta actualmente en el mercado, conseguir repuestos originales a precios accesibles es una tarea ardua que lleva mucho tiempo. Por eso, nosotros nos apoyamos en la visión de nuestros representantes e identificamos cada pieza única para brindarla de forma particular, así cada cliente pueda llevar a cabo la reparación de su vehículo sin inconvenientes.',
		'Amplia Gama de Repuestos para todas las marcas y modelos',
		'Encuentre respuestos para reemplazar tu modelo: frenos, componentes de aire acondicionado, trenes delanteros, vidrios, puertas y mucho más.',
		'Autopartes a precio de exportación',
		'Brindamos repuestos originales y de reemplazo para reparaciones de cualquier tipo de vehículo. Podemos enviar todo tipo de autopartes originales mientras la regulación sobre importaciones de su país lo permita. Una vez, enviado, la responsabilidad sobre el desaduanaje dependerá de la empresa courrier y del comprador conforme a la legislación nacional de cada país.',
		'Servicio Personalizado para cada cliente',
		'Atención particular en cada cotización, para informar acerca de la disponibilidad de las autopartes en el menor tiempo posible y brindar repuestos originales al costo mínimo.'
	),

	// Contacto
	'contacto' => array(
		'Contacto',
		'Póngase en contacto con nosotros y lo asesoraremos para poder identificar la pieza que su vehículo necesita',
		'Nombre*',
		'Ingrese su nombre aquí',
		'Email*',
		'Ingrese su email aquí',
		'País*',
		'Seleccione un país',
		'Mensaje*',
		'Escriba su mensaje',
		'Enviar'
	),

	// Necesita asesoría
	'necesita_asesoria' => array(
		'¿Necesita asesoría?',
		'¿No sabe exactamente dónde esta el VIN o número de Chasis? Póngase en contacto con nosotros y le asesoraremos para poder identificar el VIN o el número de Chasis que necesita para la cotización.',
		'Contacto'
	),

	'msj-incompleto'       => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-error'            => 'Hubo un error. Por favor, intente nuevamente.',
	'msj-mail_invalido'    => 'El email ingresado es inválido. Por favor, vuelva a ingresarlo.',
	'msj-captcha_invalido' => 'El captcha no fue completado correctamente. Vuelva a intentarlo.',
	'msj-ok'               => 'Su mensaje ha sido enviado, muchas gracias por comunicarse con nosotros.<br /> breve nos pondremos en contacto con Ud.',
);

