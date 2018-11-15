<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'empresa');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2]
	);

	include('header.php');

?>

	<article>
		<section id="empresa-1" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center wow fadeIn"  id="empresa-historia" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h2><?= $txt[SECCION][0] ?></h2>
						<p><?= $txt[SECCION][1] ?></p>
						<a href="javascript:;" class="btn-green"><?= $txt['gral'][0] ?> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="row" id="datos-clave">
					<div class="col-xs-12 text-center">
						<h2><?= $txt[SECCION][2] ?></h2>
						<div class="datos-clave wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="datos-clave__titulo color-1"><?= $txt[SECCION][3] ?></div>
							<div class="datos-clave__numero color-1"><?= $txt[SECCION][4] ?></div>
							<div class="datos-clave__detalle"><?= $txt[SECCION][5] ?></div>
						</div>
						<div class="datos-clave wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="datos-clave__titulo color-1"><?= $txt[SECCION][6] ?></div>
							<div class="datos-clave__numero color-1"><?= $txt[SECCION][7] ?></div>
							<div class="datos-clave__detalle"><?= $txt[SECCION][8] ?></div>
						</div>
						<div class="datos-clave wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="datos-clave__titulo color-1"><?= $txt[SECCION][9] ?></div>
							<div class="datos-clave__numero color-1"><?= $txt[SECCION][10] ?></div>
							<div class="datos-clave__detalle"><?= $txt[SECCION][11] ?></div>
						</div>
						<div class="datos-clave wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="datos-clave__titulo color-1"><?= $txt[SECCION][12] ?></div>
							<div class="datos-clave__numero color-1"><?= $txt[SECCION][13] ?></div>
							<div class="datos-clave__detalle"><?= $txt[SECCION][14] ?></div>
						</div>
						<div class="datos-clave wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="datos-clave__titulo color-1"><?= $txt[SECCION][15] ?></div>
							<div class="datos-clave__numero color-1"><?= $txt[SECCION][16] ?></div>
							<div class="datos-clave__detalle"><?= $txt[SECCION][17] ?></div>
						</div>
						<div class="datos-clave wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="datos-clave__titulo color-1"><?= $txt[SECCION][18] ?></div>
							<div class="datos-clave__numero color-1"><?= $txt[SECCION][19] ?></div>
							<div class="datos-clave__detalle"><?= $txt[SECCION][20] ?></div>
						</div>
					</div>
				</div>
			
			</div>
		</section>		
		<section id="vision" class="verde">
			<div class="left verde">
				<div class="left__container wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h3 class="color-2"><?= $txt[SECCION.'_vision'][0] ?></h3>
					<p class="color-2"><?= $txt[SECCION.'_vision'][1] ?></p>
				</div>
			</div>
			<div class="right"></div>
		</section>
		<section id="compromiso" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 text-center">
						<h3><?= $txt[SECCION.'_compromiso'][0] ?></h3>
						<p><?= $txt[SECCION.'_compromiso'][1] ?>
						</p>
					</div>
				</div>	
			</div>
				<div class="text-center">
					<div class="compromiso__module wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="compromiso__module__img">
							<img src="images/empresa-1.jpg" alt="" class="img-responsive">
						</div>
						<div class="compromiso__module__titulo"><h4 class="color-1"><?= $txt[SECCION.'_compromiso'][2] ?></h4></div>
						<div class="compromiso__module__descrip"><?= $txt[SECCION.'_compromiso'][3] ?></div>
					</div>
					<div class="compromiso__module wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="compromiso__module__img">
							<img src="images/empresa-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="compromiso__module__titulo"><h4 class="color-1"><?= $txt[SECCION.'_compromiso'][4] ?></h4></div>
						<div class="compromiso__module__descrip"><?= $txt[SECCION.'_compromiso'][5] ?></div>
					</div>
						<div class="compromiso__module wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="compromiso__module__img">
								<img src="images/empresa-3.jpg" alt="" class="img-responsive">
							</div>
							<div class="compromiso__module__titulo"><h4 class="color-1"><?= $txt[SECCION.'_compromiso'][6] ?></h4></div>
							<div class="compromiso__module__descrip"><?= $txt[SECCION.'_compromiso'][7] ?></div>
						</div>
				</div>		
		</section>
		<?php include('templates/logos.php'); ?>
	</article>
	<?php include('footer.php'); ?>