$(document).ready(function(){

	/** 
	* PLUGINS
	* Todo el JS está dividido en módulos que cargamos opcionalmente junto con
	* sus dependencias (otros JS y CSS).
	*
	* Con la función cargarPlugin() definimos si se carga o no y con cargarRecursos()
	* cargamos dinámicamente todas las dependencias del script que queremos ejecutar.
	*
	* CargarPlugin() lee un array creado con el método Plugins::activar() del helper 
	* Plugins (core/Plugins.php)
	*
	* Ej :  Plugins::activar('owlCarousel')
	*/



	// WOW (animación)
	// https://github.com/matthieua/WOW
	if( cargarPlugin('animacion') ){
		cargarRecursos([
			{tipo: 'css',  src: 'css/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.wow/wow.min.js'},

		], function(){
			wow = new WOW({
				boxClass:     'wow',     
				animateClass: 'animated',
				offset:       0,         
				mobile:       true,      
				live:         false       
		    }).init();
		});
	}

	// Slider
	// http://kenwheeler.github.io/slick/
	if( cargarPlugin('slick') ){

		cargarRecursos([
				{tipo: 'css', src: 'js/jquery.slick/slick.css'},
				{tipo: 'js',  src: 'js/jquery.slick/slick.min.js'},
			],

			function() {

				$('.slider-marcas').slick({
				  slidesToScroll: 1,
				  slidesToShow: 6,
				  arrows: false,
				  dots: false,
				  centerMode: false,
				  focusOnSelect: false,
				  variableWidth: false,
				  autoplay: true,
				  autoplaySpeed: 2000,
				  responsive: [
				  	{
				  	  breakpoint: 1200,
				  	  settings: {
				  	  	slidesToShow: 5
				  	  }
				  	},
				  	{
				  	  breakpoint: 992,
				  	  settings: {
				  	  	slidesToShow: 4
				  	  }
				  	},
				  	{
				  	  breakpoint: 768,
				  	  settings: {
				  	  	slidesToShow: 3
				  	  }
				  	},
				  	{
				  	  breakpoint: 577,
				  	  settings: {
				  	  	slidesToShow: 2
				  	  }
				  	},
				  	{
				  	  breakpoint: 480,
				  	  settings: {
				  	  	slidesToShow: 1
				  	  }
				  	},
				  ]
				});
				$('.slider-double').slick({
				  slidesToScroll: 1,
				  slidesToShow: 1,
				  arrows: false,
				  dots: false,
				  focusOnSelect: false,
				  autoplay: true,
				  autoplaySpeed: 2000,
				  asNavFor: '.slider-double-nav'
				});
				$('.slider-double-nav').slick({
				  slidesToScroll: 1,
				  slidesToShow: 1,
				  arrows: true,
				  dots: true,
				  focusOnSelect: false,
				  autoplay: true,
				  autoplaySpeed: 2000,
				  asNavFor: '.slider-double',
				  responsive: [
				  	{
				  	  breakpoint: 768,
				  	  settings: {
				  	  	arrows: false
				  	  }
				  	},
				  ]
				});
			} //Cierra función



		); //Cierra cargar recursos
	}

	// Mapas (Google Maps)
    // https://developers.google.com/maps/documentation/javascript/?hl=es
    var GOOGLE_API_KEY = 'AIzaSyDbawBEaic253UJFGWZb8YfJyBDPjYv938';
    if (cargarPlugin('googleMaps')) {
        cargarRecursos([
            { tipo: 'js', src: 'https://maps.google.com/maps/api/js?key=' + GOOGLE_API_KEY },
        ], function() {
            function crearMapa($elem) {
                var myLatlng = new google.maps.LatLng($elem.data('lat'), $elem.data('lng'));
                var mapOptions = {
                    zoom: 17,
                    scrollwheel: false,
                    center: myLatlng,
                };

                var map = new google.maps.Map($elem.get(0), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                     //icon: '/images/ping.png'
                });              

                // Lo marco como cargado
                $elem.data('cargado', 'true');
            }

            $('.js-mapa[data-cargado=false]').each(function() {
                crearMapa($(this));
            });
        });
    }

	/** 
	* JS GENERALES
	* Estos scripts se ejecutan siempre.
	*
	*/

	/// Transiciones entre páginas y animación de enlaces internos # ///
	$(function() {

		$('html').addClass('active'); /* [1] */

		$('a').each(function() { /* [2] */
			if ( location.hostname === this.hostname || !this.hostname.length ) { /* [2] */

				var link = $(this).attr("href"); /* [3] */

				if ( link.match("^#") ) { /* [4] */

					$(this).click(function() {
						var target = $(link); /* [5] */ 
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); /* [5] */ 
						if (target.length) {
							$('html,body').animate({ /* [6] */ 
							scrollTop: target.offset().top - 70 /* [6] */ 
							}, 1000); return false; /* [6] */ 
						}
					});

				} else if ( link.match("^mailto") ) { /* [7] */ 
					// Act as normal  /* [7] */ 
				} else {

					$(this).click(function(e) {
					e.preventDefault(); /* [8] */ 
					$('html').removeClass('active'); /* [9] */ 
					setTimeout(function() { /* [10] */
					window.location = link; /* [10] */
					}, 500); /* [10] */
					});

				}

			}
		});

	});
	 
	/// Scroll en cabecera ///
	// Anima el menú cuando hay scroll
	// $( window ).scroll(function(){
	// 	var $cabecera = $('.cabecera');
	// 	if( $(window).scrollTop() > 20){
	// 		$cabecera.addClass('scroll');
	// 	}else{
	// 		$cabecera.removeClass('scroll');
	// 	}
	// });
	// Oculta y muestra el menú cuando hay scroll
	var $cabecera = $('.cabecera');
	var previousScroll = 0;
	$(window).scroll(function(event){
	   var scroll = $(this).scrollTop();
	   if (scroll > previousScroll && scroll > 400){
	       $cabecera.addClass('ocultar');
	       //Cierra el menú cuando hay scroll
			$(".navbar-collapse").removeClass("in").addClass("collapse");
			$(".hamburger").removeClass("is-active");
	   } else {
	      $cabecera.removeClass('ocultar');
	   }
	   previousScroll = scroll;
	});

	/// Menú hamburguesa ///
	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
			$('.nav-principal').fadeToggle();
			$('.cabecera').toggleClass('active');
			$('body').toggleClass('nav-active');
		});
	});



	/** 
	* HELPERS
	* Estas funciones son las que usamos definir si cargar o no el resto del JavaScript
	* y cargar sus recursos
	*
	*/


	// Reviso si cargar un plugin JS
	// Cargo solo los plugins listados en el array jsPlugins (El array jsPlugins se genera con PHP).
	function cargarPlugin(plugin){
		return (window.jsplugins.indexOf( plugin ) !== -1);
	}

	// Cargo los recursos dinámicamente y ejecuto el callback
	// (Pueden ser CSS o JS)
	function cargarRecursos(recursos, callback) {
		var total = recursos.length;
		recursos.forEach(function(r){
			var s;
			if(r.tipo == 'css'){
				s = document.createElement( 'link' );
				s.setAttribute('rel','stylesheet');
				s.setAttribute('type','text/css');
				s.setAttribute('href',r.src);
			}
			if(r.tipo == 'js'){
				s = document.createElement( 'script' );
				s.setAttribute( 'src', r.src );
			}
			s.onload = s.onreadystatechange = function() {
			    if(!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
			        total--;
					/*console.log('Cargó ' + r.src);*/
    				if(total === 0){
    					callback();
    				}
			    }
			};
			document.head.insertBefore(s, document.head.firstChild);
		});
	}
});