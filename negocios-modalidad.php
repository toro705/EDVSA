<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'negocios-modalidad');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>

	<article>
		<section id="negocios-modalidad-1" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<h2><?= $txt[SECCION][0] ?></h2>
						<p><?= $txt[SECCION][1] ?></p>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-5 col-md-offset-1">
							<h4 class="color-1"><?= $txt[SECCION][2] ?></h4>
							<ul class="unstyled-list list-chevron">
								<li><?= $txt[SECCION][3] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][4] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][5] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][6] ?></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-5">
							<h4 class="color-1"><?= $txt[SECCION][7] ?></h4>
							<ul class="unstyled-list list-chevron">
								<li><?= $txt[SECCION][8] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][9] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][10] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][11] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][12] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][13] ?></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-5 col-md-offset-1">
							<h4 class="color-1"><?= $txt[SECCION][14] ?></h4>
							<ul class="unstyled-list list-chevron">
								<li><?= $txt[SECCION][15] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][16] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][17] ?></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-5">
							<h4 class="color-1"><?= $txt[SECCION][18] ?></h4>
							<ul class="unstyled-list list-chevron">
								<li><?= $txt[SECCION][19] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][20] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][21] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][22] ?></li>
							</ul>
						</div>
					</div>					
				</div>
			</div>
			<div class="image-full">
				<img src="images/negocios-modalidad-1.jpg" class="img-responsive" alt="">
			</div>

		</section>	
	
		<section id="negocios-modalidad-elegirnos" class="banda verde">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="color-2 text-center"><?= $txt[SECCION.'_elegirnos'][0] ?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-sm-6">
								<ul class="list-check">
									<li><?= $txt[SECCION.'_elegirnos'][1] ?></li>
									<li><?= $txt[SECCION.'_elegirnos'][2] ?></li>
									<li><?= $txt[SECCION.'_elegirnos'][3] ?></li>
									<li><?= $txt[SECCION.'_elegirnos'][4] ?></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<ul class="list-check">
									<li><?= $txt[SECCION.'_elegirnos'][5] ?></li>
									<li><?= $txt[SECCION.'_elegirnos'][6] ?></li>
									<li><?= $txt[SECCION.'_elegirnos'][7] ?></li>
								</ul>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<?php include('templates/logos.php'); ?>
	</article>
<?php include('footer.php'); ?>