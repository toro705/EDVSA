<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'experiencia');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>

	<article>
		<section id="negocios-1" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h2><?= $txt[SECCION][0] ?></h2>
						<p><?= $txt[SECCION][1] ?></p>
						<div class="clearfix"></div>
						<h3><?= $txt[SECCION][2] ?>:</h3>
					</div>
												
				</div>
			</div>		
			<div class="container-fluid">
				<div class="row" id="destacados">
					<div class="text-center">
						<div class="negocios-1__image">
							<img src="images/experiencia-1.jpg" class="img-responsive" alt="">
							<a href="<?=url('proyectos','servicios-de-o&m')?>" class="negocios-1__image__hover">
								<h3 class="color-2 text-center">Servicios O&M</h3>
								<div class="h4 text-center verde color-2">+</div>

							</a>
						</div>
						<div class="negocios-1__image">
							<img src="images/experiencia-3.jpg" class="img-responsive" alt="">
							<a href="<?=url('proyectos','energia')?>" class="negocios-1__image__hover">
								<h3 class="color-2 text-center">Energía</h3>
								<div class="h4 text-center verde color-2">+</div>

							</a>
						</div>
						<div class="negocios-1__image">
							<img src="images/experiencia-2.jpg" class="img-responsive" alt="">
							<a href="<?=url('proyectos','oil&gas')?>" class="negocios-1__image__hover">
								<h3 class="color-2 text-center">Oil & Gas</h3>
								<div class="h4 text-center verde color-2">+</div>

							</a>
						</div>
						<div class="negocios-1__image">
							<img src="images/experiencia-4.jpg" class="img-responsive" alt="">
							<a href="<?=url('proyectos','mineria')?>" class="negocios-1__image__hover">
								<h3 class="color-2 text-center">Minería</h3>
								<div class="h4 text-center verde color-2">+</div>

							</a>
						</div>
					</div>
				</div>
			</div>				

		</section>	

	
	</article>
<?php include('footer.php'); ?>