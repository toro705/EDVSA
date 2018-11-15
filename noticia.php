<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'noticia');

 	if(! isset($_GET['uri']) OR ! $noticia = Novedad::obtener(array_merge(
 			array('uri' => $_GET['uri']),
 			isset($_GET['vp']) ?  array('vp' => true) : array()
 			))
 		){
        error_404();
 	}

 	define('URL_SECCION', $noticia->url);

 	$metas = array(
		'titulo' 		=> $noticia->titulo,
		'descripcion' 	=> $noticia->bajada,
		'img' 			=> $noticia->foto->src,
		'slider' 		=> $txt['noticia_metas'][2],
	);


	include('header.php');

?>

	<article>
		<section class="banda blanca ficha">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<h2><?= $noticia->titulo ?></h2>
						<span class="ficha__bajada"><?= $noticia->bajada ?></span>
						<div class="ficha__imagen">
							<img class="img-responsive" src="<?= $noticia->foto->src ?>">
						</div>
						<div class="ficha__texto">
							<?= $noticia->cuerpo ?>
						</div>
						<div class="ficha__compartir">
							<span class="ficha__compartir-titulo"><?=$txt['gral'][5]?></span>
							<ul class="ficha__compartir-redes">
              	<li><a class="fb" href="javascript: window.open('https://www.facebook.com/sharer/sharer.php?u=<?=$noticia->url?>', 'Facebook', 'width=600' );"><i class="fa icon-fb"></i><span>Facebook</span></a></li>
                <li><a class="tw" href="javascript: window.open('http://twitter.com/intent/tweet?text=<?=$txt[SECCION][0].' '.Empresa::$nombre.' '.$noticia->url?>', 'Twitter', 'width=600' );"><i class="fa icon-tw"></i><span>Twitter</span></a></li>
                <li><a class="in" href="javascript: window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?=urlencode($noticia->url).'&title='.$noticia->titulo?>', 'Linkedin', 'width=600' );"><i class="fa icon-in"></i><span>LinkedIn</span></a></li>
              </ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 col-md-offset-1">
					<?php
						$total = 0;
						ob_start();
						foreach(Novedad::obtener('ultimas',3) as $i => $n){
							if($n->id == $noticia->id){
								continue;
							}
							$total ++;

							include('templates/noticia.php');

							if($total == 2){
								break;
							}
						}
						$html_noticias = ob_get_contents();
						ob_end_clean();
						if($html_noticias){
							echo '<div class="ficha__lateral">
									<h4 class="ficha__titulo-lateral">'. $txt[SECCION][1] .'</h4>
									<div class="row contenedor-modulos">
										'. $html_noticias .'
									</div>
								</div>'. PHP_EOL;
						}
						?>
					</div>
				</div>
			</div>
		</section>
	</article>

<?php include('footer.php'); ?>