<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'proyecto');
 	if(! isset($_GET['uri']) OR ! $proyecto = Proyecto::obtener(array_merge(
 			array('uri' => $_GET['uri']),
 			isset($_GET['vp']) ?  array('vp' => true) : array()
 			))
 		){
        error_404();
 	}

 	define('URL_SECCION', $proyecto->url);

 	$metas = array(
		'titulo' 		=> $proyecto->titulo,
		'descripcion' 	=> $proyecto->descripcion,
		'img' 			=> $proyecto->galeria[0]->src,
	);


	define('AJAX', isset($_GET['ajax']));

 	if (! AJAX) {
		Plugins::activar('owlCarousel');
		Plugins::activar('slider-proyecto');
		include('header.php');
	}


?>

<article>
	<?php if (! AJAX) { ?>
	<section id="proyecto-resultado__head" class="banda verde">
		<div class="container">
			<h3 class="color-2 text-center">Proyecto</h3>
		</div>
	</section>
	<?php } ?>
	<div class="container" style="margin-top: 30px; margin-bottom: 40px;">
		<div class="row">
			<div class="col-sm-6">
				<div class="slider-proyecto">
					<ul class="gridder-content__slider owl-carousel">
					<?php foreach($proyecto->galeria as $foto){
						echo '<li><img src="'.  $foto->src .'" class="img-responsive" /></li>'.PHP_EOL;
					} ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-6 gridder-content__content text-left">
				<h3><?= $proyecto->titulo ?></h3>
				<hr>
				<p><?= $proyecto->descripcion ?></p>
				<hr>
				<div class="gridder-content__content__bottom text-left">
					<?= $proyecto->cliente 		? '<p><b>Cliente: </b>'.$proyecto->cliente.'</p>' : ''?>
					<?= $proyecto->ubicacion 	? '<p><b>Lugar: </b>'.$proyecto->ubicacion.'</p>' : ''?>
					<?= $proyecto->periodo 		? '<p><b>Periodo: </b>'.$proyecto->periodo.'</p>' : ''?>
				</div>
			</div>
		</div>
	</div>
</article>


<?php if (! AJAX) { ?>
	<?php include('footer.php'); ?>
<?php } ?>