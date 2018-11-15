<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'productos');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>

	<article>
		<section class="banda blanca" id="presentacion">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<p class="destacado"><?=$txt[SECCION][0]?></p>
						<h2><?=$txt[SECCION][1]?></h2>
					</div>
				</div>
			</div>
		</section>
		<section class="tabs">
			<?php Plugins::activar('tabs'); ?>
			<div class="tab-seccion container">
				<nav class="tab-nav-container hidden-xs hidden-sm">
					<?php foreach ($txt['productos_tabs'] as $i => $tab){
						$indice = $i+1;
						echo'<a class="tab-nav tab-'.$indice.'" href="#'.$tab[0].'">
								<span class="tab-nav__titulo">'.$tab[1].'</span>
								'.$tab[2].'
								<span class="tab-nav__tipo">'.$tab[3].'</span>
							</a>';
					} ?>
				</nav>
				<div class="tab-container">
					<?php foreach ($txt['productos_tabs'] as $i => $tab){
						$indice = $i+1;
						echo'<div class="tab-content text-center" id="'.$tab[0].'">
								<div class="tab-nav tab-'.$indice.' visible-xs-inline-block visible-sm-inline-block">
									<span class="tab-nav__titulo">'.$tab[1].'</span>
									'.$tab[2].'
									<span class="tab-nav__tipo">'.$tab[3].'</span>
								</div>
								<div class="tab-content__contenido">
									<div class="tab-content__texto">
										'.$tab[4].'
									</div>
									<img class="img-responsive" src="images/productos/img-'.$indice.'.jpg">
								</div>
								<div class="tab-content__mapa">
									<img class="img-responsive" src="images/productos/mapa-'.$indice.'.gif">
								</div>
							</div>';
					} ?>
				</div>
			</div>
		</section>
		<section class="frascos">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2><?=$txt[SECCION][2]?></h2>
						<p><?=$txt[SECCION][3]?></p>
						<div class="frascos__imagen">
							<img class="img-responsive" src="images/productos-2.png">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="banda blanca productos-colmena">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2><?=$txt[SECCION][4]?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2">
						<div class="productos-colmena__texto">
							<p><?=$txt[SECCION][5]?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-5">
						<div class="productos-colmena__imagen">
							<img class="img-responsive" src="images/productos-3.jpg">
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>
<?php include('footer.php'); ?>