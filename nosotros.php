<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'nosotros');

// Fin configuración de la página //

  include('header.php');

  Plugins::activar('googleMaps');
  Plugins::activar('slick');

?>

<section class="top">
	<div class="container">
		<h1><strong>Nosotros</strong></h1>
		<h2>AutopartGo! es el mejor servicio de atención personalizada para repuestos de cualquier vehículo. Ofrecemos un servicio eficaz que resuelve su búsqueda de autopartes en el menor tiempo posible.</h2>
	</div>
</section>

<section class="floating-box-container">
	<div class="container">
		<article class="floating-box">
			<h3>Bienvenido a AutoPartGo!</h3>
			<p>Entregamos piezas originales compatibles con tu automóvil; pueden enviarse reemplazos de carrocería, interiores, suspensión, piezas de alto rendimiento y demás repuestos necesarios para el funcionamiento óptimo de cada modelo. Cuanta más información nos brinde de su búsqueda, más rápida va a ser la localización de la autoparte. Con especificaciones breves como un número de chasis y el modelo específico de su vehículo, podemos empezar a identificar el repuesto pretendido.</p>
			<p>Con la dificultad que se presenta actualmente en el mercado, conseguir repuestos originales a precios accesibles es una tarea ardua que lleva mucho tiempo. Por eso, nosotros nos apoyamos en la visión de nuestros representantes e identificamos cada pieza única para brindarla de forma particular, así cada cliente pueda llevar a cabo la reparación de su vehículo sin inconvenientes.</p>
		</article>
	</div>
</section>

<section class="banda">
	<div class="container">
		<div class="slider-double-container">
			<article class="slider-double">
				<div class="slide" style="background-image: url('images/slider-nosotros/amplia-gama.jpg')">
					<img src="images/slider-nosotros/amplia-gama.jpg">
				</div>
				<div class="slide" style="background-image: url('images/slider-nosotros/exportacion.jpg')">
					<img src="images/slider-nosotros/exportacion.jpg">
				</div>
				<div class="slide" style="background-image: url('images/slider-nosotros/atencion.jpg')">
					<img src="images/slider-nosotros/atencion.jpg">
				</div>
			</article>
			<article class="slider-double-nav">
				<div class="slide">
					<h3>Amplia Gama de Repuestos para todas las marcas y modelos</h3>
					<p>Encuentre respuestos para reemplazar tu modelo: fren   os, componentes de aire acondicionado, trenes delanteros, vidrios, puertas y mucho más.</p>
				</div>
				<div class="slide">
					<h3>Autopartes a precio de exportación</h3>
					<p>Brindamos repuestos originales y de reemplazo para reparaciones de cualquier tipo de vehículo. Podemos traer neumáticos, baterías, radiadores, bielas y todo tipo de autopartes originales.</p>
				</div>
				<div class="slide">
					<h3>Servicio Personalizado para cada cliente</h3>
					<p>Atención particular en cada cotización, para informar acerca de la disponibilidad de las autopartes en el menor tiempo posible y brindar repuestos originales al costo mínimo.</p>
				</div>
			</article>
		</div>
	</div>
</section>


<section class="banda">
	<div class="container">
		<article class="banda-mapa">	
			<div class="js-mapa " data-cargado="false" data-lat="25.771112" data-lng="-80.2910264" style="height: 400px; z-index: 4000">
				<a href="https://www.google.com.ar/maps/place/W+Flagler+St,+Miami,+FL,+USA/@25.771112,-80.2910264,17z/data=!4m5!3m4!1s0x88d9b9ce50c13d81:0x3ef384e65dbb20b0!8m2!3d25.7708028!4d-80.2902754" style="color: #fff;">
					AutoPartGo! Google Maps
				</a>
			</div>
		</article>
	</div>
</section>

<?php include('necesita-asesoria.php'); ?>
<?php include('slider-marcas.php'); ?>
<?php include('footer.php'); ?>