<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'noticias');

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
				<?php if($novedades = Novedad::obtener()){?>
				<div class="row contenedor-modulos">
				<?php foreach($novedades as $n){
					include('templates/noticia.php');
				}?>
				</div>
				<?php } ?>
			</div>
		</section>
	</article>

<?php include('footer.php'); ?>