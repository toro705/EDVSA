	<?php if (SECCION != 'home') {
		echo'</main>';
	} ?>
	<div class="clearfix"></div>
	<footer class="pie">
		<div class="container">
    		<div class="row">
    			<div class="col-xs-12">
    				<a class="pie__logo" href="<?=url('home')?>">
						<img class="img-responsive" src="images/logo_nav-principal-pie.png" alt="<?=Empresa::$nombre?>">
					</a>
					<ul class="list-inline unstyled-list list-redes">
						<li class="hidden"><a href="<?=Empresa::$nombre['fb_es']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="hidden"><a href="<?=Empresa::$nombre['tw']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?=Empresa::$redes['in']?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="hidden"><a href="<?=Empresa::$nombre['yt']?>"><i class="fa fa-play" aria-hidden="true"></i></a></li>
						<li class="hidden"><a href="<?=Empresa::$nombre['inst']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
    			</div>
    			<div class="clearfix visible-xs"></div>
    			<div class="col-md-3 col-sm-5 col-xs-12 pie__nav">
				 		<a href="<?=url('empresa')?>"><span><?=$txt['nav'][0]?></span></a>
				 		<div class="clearfix visible-sm"></div>
    				 	<ul class="unstyled-list list-chevron">
    				 		<li><a href="<?=url('empresa')?>#datos-clave"><?= $txt['nav'][4] ?></a></li>
    				 		<li><a href="<?=url('empresa')?>#empresa-historia"><?= $txt['nav'][5] ?></a></li>
    				 		<li><a href="<?=url('empresa')?>#vision"><?= $txt['nav'][6] ?></a></li>
    				 		<li><a href="<?=url('empresa')?>#compromiso"><?= $txt['nav'][7] ?></a></li>
    				 		<li><a href="<?=url('empresa')?>"><?= $txt['nav'][8] ?></a></li>
    				 	</ul>
    			</div>
    			<div class="clearfix visible-xs"></div>
    			<div class="col-lg-4  col-md-5 col-sm-7 col-xs-12 pie__nav">
						<div class="pie__nav__col">
					 		<a href="<?=url('negocios')?>"><span><?=$txt['nav'][1]?></span></a>
					 		<a href="<?=url('negocios')?>"><?= $txt['nav'][9] ?></a>
	    				 	<ul class="unstyled-list list-chevron">
	    				 		<li><a href="<?=url('negocios')?>#negocios-energia"><?= $txt['nav'][10] ?></a></li>
	    				 		<li><a href="<?=url('negocios')?>#oilgas"><?= $txt['nav'][11] ?></a></li>
	    				 		<li><a href="<?=url('negocios')?>#negocios-mineria"><?= $txt['nav'][12] ?></a></li>
	    				 		<li><a href="<?=url('negocios')?>#negocios-servicios"><?= $txt['nav'][13] ?></a></li>
	    				 	</ul>
						</div>
						<div class="pie__nav__col">
					 		<a href="<?=url('negocios-modalidad')?>"><?= $txt['nav'][14] ?></a>
						</div>
    			</div>
    			<div class="clearfix visible-sm visible-xs"></div>
    			<div class="col-lg-3 col-md-2 col-sm-5 col-xs-12 pie__nav">
				 		<a href="<?=url('experiencia')?>"><span><?=$txt['nav'][2]?></span></a>
				 		<a href="<?=url('experiencia')?>#destacados"><?= $txt['nav'][15] ?></a>
    			</div>
    			<div class="clearfix visible-xs"></div>
    			<div class="col-lg-2 col-sm-2 col-md-5 col-xs-12 pie__nav">
				 		<a href="<?=url('contacto')?>"><span><?=$txt['nav'][3]?></span></a>
    			</div>
	    	</div>
	    	<div class="clearfix visible-xs"></div>
			<div class="pie__copyright">
				<div class="container">
		    		<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="pie__legales">
								<small><span><?=Empresa::$nombre?></span> © 2016 Todos los derechos reservados</small>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">SYNAPSIS ci</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php if (SECCION != 'home') {
		echo'</body>';
	} ?>

	<?php if (SECCION == 'proyecto_resultado') { 
			Plugins::activar('owlCarousel'); 
		}
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/dropdown.min.js"></script>

	<?php
		Plugins::activar('animacion'); 
		Plugins::cargar();
		$main_js = $minified->minify('js/main.js','js/main.min.js');
		echo '<script src="'.$main_js.'?v='. filemtime(BASE_PATH.$main_js) .'"></script>'. PHP_EOL; 
	?>
	<?php if (SECCION == 'proyecto_resultado') { ?>
		<script src="https://rawgit.com/oriongunning/gridder/master/dist/js/jquery.gridder.min.js"></script>
		<script>

            jQuery(document).ready(function ($) {
                $.ajax({'cache' : false});
                $(".gridder").gridderExpander({
                    scroll: true,
    			    loop: true,
                    scrollOffset: 60,
                    scrollTo: "panel", // panel or listitem
                    animationSpeed: 400,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa fa-arrow-right\"></i>",
                    prevText: "<i class=\"fa fa-arrow-left\"></i>",
                    closeText: "<i class=\"fa fa-times\"></i>",
                    onStart: function () {
                        // console.log("Gridder Inititialized");
                    },
                    onContent: function () {
                        console.log("Gridder Content Loadedgogo");
                        // console.log("its been a while");
                        console.log(this);
                        	$(this).css('background', '#000');
							$('.gridder-content__slider').owlCarousel({
								items: 1,	
								autoplay: true,
						        singleItem: true,
						        nav: true,
						        dots: false,
						        navText: [
					            "<div class=\"slider-interno__controls prev\"><i class=\"fa fa-chevron-left\"></i></div>",
					            "<div class=\"slider-interno__controls next\"><i class=\"fa fa-chevron-right\"></i></div>"
					            ],
							});
							console.log(this);
                    },
                    onClosed: function () {
						//$('.gridder-slider').trigger('destroy.owl.carousel');
                    }	
                });
            });
        
		</script>
	<?php } ?>
</html>