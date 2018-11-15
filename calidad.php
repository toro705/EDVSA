<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'calidad');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2]
	);

	include('header.php');

?>

	<article>
		<section class="banda blanca">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<h2><?=$txt[SECCION][0]?></h2>
						<h3><?=$txt[SECCION][1]?></h3>
						<p><?=$txt[SECCION][2]?></p>
						<p><?=$txt[SECCION][3]?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="banda blanca">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3><?=$txt[SECCION][4]?></h3>
						<br>
						<br>
					</div>
				</div>
				<div class="row contenedor-modulos">
					<?php foreach ($txt[SECCION.'_listado_1'] as $i => $item) {
						$indice = $i+1;
						echo'<a class="modulo-calidad" href="certificados/certificado-'.$indice.'.pdf" target="_blank">
								<div class="modulo-calidad__imagen">
									<img class="img-responsive" src="images/calidad-'.$indice.'.gif">
								</div>
								<div class="modulo-calidad__texto">
									<p>'.$item.'</p>
								</div>
							</a>';
					} ?>
				</div>
			</div>
		</section>
	</article>
	<?php include('footer.php'); ?>