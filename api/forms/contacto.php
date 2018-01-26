<?php

include_once('core/Formulario.php');

$form_contacto = new Formulario(
	array(
		'destinatarios' => array(
			// Mientras el sitio este en desarrollo probar el funcionamiento del formulario con una cuenta alternativa. Luego en el proceso de publicado, dejar funcionando con el mail del cliente
			// Config::obtener('empresa')->email,
			'juanmartingermano@gmail.com',
		),
		'asunto' 	=> 'Contacto - '.Config::obtener('empresa')->nombre,
		'remitente' => array(
			'nombre' => 'Web '.Config::obtener('empresa')->nombre,
			// Completar con el dominio del cliente ej: web@kodent.com.ar
			'email' => 'web@autopartgo.com' // Email ficticio 
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false,
			'guardar_contacto' => false,
			'guardar_form' => false
		)
	)
);

// Esto genera el mail que va a llegar al cliente. Levanta los datos del form que está en la web.
$form_contacto->agregarCampos(
	array(

		array(
			'name' 		=> 'name',
			'label' 	=> 'Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),	

		array(
			'name' 		=> 'email',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('formato', 'requerido'),
		),

		array(
			'name' 		=> 'paises',
			'label' 	=> 'País',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'mensaje',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'textarea',
			'validar' 	=> array('requerido'),
		),

		// array(
		// 	'name' 		=> 'captcha',
		// 	'label' 	=> 'Captcha',
		// 	'tipo' 		=> 'Captcha',
		// 	 'validar' 	=> array('requerido'),
		// ),

	)
);

// Solo usar si hay idioma
	// $form_contacto->agregarMensajeEstado(
	// 	array (
	// 		'incompleto'       =>  __('msj-incompleto'),
	// 		'error'            =>  __('msj-error'),
	// 		'mail_invalido'    =>  __('msj-mail_invalido'),
	// 		'captcha_invalido' =>  __('msj-captcha_invalido'),
	// 		'ok'               =>  __('msj-ok'),
	// 	)
	// );

// enviar_contacto tiene que corresponder con el name del botón de submit
if( isset($_POST['enviar_contacto']) ){
	$form_contacto->enviar();
}
