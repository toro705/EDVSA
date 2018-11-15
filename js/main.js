$(document).ready(function(){


	// Animación de enlaces internos
		$(function() {
		 $('a[href*="#"]:not([href="#"])').filter(':not([data-toggle])').click(function() {
		   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		     var target = $(this.hash);
		     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		     if (target.length) {
		       $('html,body').animate({
		         scrollTop: target.offset().top - 100
		       }, 1000);
		       location.hash = this.hash;
		       return false;
		     }
		   }
		 });
		});


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


	// Galerías (Owl Carousel)
	// http://owlcarousel2.github.io/OwlCarousel2/
	if( cargarPlugin('owlCarousel') ){
		cargarRecursos([
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/owl.carousel.css'},
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.owl.carousel/owl.carousel.min.js'},

		], function(){

			$('.slider-principal > ul').owlCarousel({
				autoplay: true,
				items: 1,
			    loop: true,
			    slideSpeed: 1000,
			    autoplaySpeed: 1000,
		        singleItem: true,
		        nav: false,
				dots: true,
		        dragBeforeAnimFinish: false,
		        mouseDrag: true,
		        touchDrag: false
			});

			$('.slider-interno').owlCarousel({

				autoplay: true,
				items: 1,
			    loop: true,
		        singleItem: true,
		        nav: true,
		        dots: false,
		        mouseDrag: true,
		        touchDrag: false,		        
		        navText: [
	            "<div class=\"slider-interno__controls prev\"><i class=\"fa fa-chevron-left\"></i></div>",
	            "<div class=\"slider-interno__controls next\"><i class=\"fa fa-chevron-right\"></i></div>"
	            ],
			});

			var fixOwl = function(){
			        var $stage = $('.slider-lugares .owl-stage'),
			            stageW = $stage.width(),
			            $el = $('.slider-lugares .owl-item'),
			            elW = 0;
			        $el.each(function() {
			            elW += 348
			            // console.log(elW);
			        });
			        if ( elW > stageW ) {
			            $stage.width( elW );
			            // console.log('activado');
			        };
			    };
			$('.slider-lugares').owlCarousel({
			    loop: true,
			    autoWidth: true,
			    margin: 4,
		        nav: true,
		        dots: false,
		        center: true,	
		        mouseDrag: true,
		        touchDrag: false,
		        navText: [
	            "<div class=\"slider-interno__controls prev\"><i class=\"fa fa-chevron-left\"></i></div>",
	            "<div class=\"slider-interno__controls next\"><i class=\"fa fa-chevron-right\"></i></div>"
	            ],
		        onInitialized: fixOwl,
		        onRefreshed: fixOwl
			});
			// $('.slider-lugares .owl-item').each/
		});
	}

	//// MAP ///

	// Desplegable de idioma
	$('.js-desplegable').mouseover(function(){
		$('.js-desplegable-contenido').stop().slideDown(500);
	});
	$('.js-desplegable').mouseleave(function(){
		$('.js-desplegable-contenido').stop().slideUp(500);
	});


	/// Scroll en cabecera ///
	// Anima el menú cuando hay scroll
	$( window ).scroll(function(){
		var $cabecera = $('.cabecera');
		if( $(window).scrollTop() > 20){
			$cabecera.addClass('scroll');
		}else{
			$cabecera.removeClass('scroll');
		}
	});
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


	/// Hamburguesa ///
	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
		});
	});


	///// Helpers /////

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
			document.body.appendChild( s );
		});
	}
});