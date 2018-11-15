<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'proyecto_resultado');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	$filtros = array();
	if(isset($_GET['area'])){
		$filtros['area'] = $_GET['area'];
	}

	Plugins::activar('owlCarousel');

	include('header.php');

?>

	<article>
		<section id="proyecto-resultado__head" class="banda verde">
			<div class="container">
				<h3 class="color-2 text-center">
					<?= $txt[SECCION.'_metas'][2] ?>
					<?php if($area = Area::obtener('id', $_GET['area'])){?>
					<br><b><?= $area->titulo ?></b>
					<?php } ?>
				</h3>
			</div>
		</section>
		<section>
		<?php if($proyectos = Proyecto::obtener($filtros)){?>
			<ul class="lugares gridder">
			<?php foreach($proyectos as $proy){?>
				<li class="gridder-list" data-griddercontent="<?= $proy->url.'?ajax'; ?>">
					<a href="<?= $proy->url ?>">
						<img src="<?= $proy->foto->src ?>" alt="<?= $proy->foto->alt ?>">
						<div class="lugares__cont">
							<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
							<p class="paragraph-2 color-2"><b><?= $proy->ubicacion ?></b></p>
							<hr>	
							<h4 class="color-2"><?= $proy->titulo ?></h4>
							<hr>	
						    <?php if($proy->cliente){ ?>
						    <p class="paragraph-2 color-2">Cliente: <br> <?= $proy->cliente ?></p>		
							<?php } ?>
						</div>
					</a>
					<i class="fa fa-caret-down" aria-hidden="true"></i>
				</li>
			<?php } ?>
			</ul>
			<?php }else{
				echo '<p class="lead text-center" style="margin-top: 40px; margin-bottom: 50px;">'. $txt[SECCION]['sin-proyectos'] .'</p>';
			} ?>
			<!--<li id="content1" class="gridder-content">
				<div class="container">
					<i class="fa fa-caret-down color-1" aria-hidden="true"></i>				
					<div class="row">
						<div class="col-sm-6 gridder-content__slider">
							<ul class="gridder-slider">
								<li class="text-center">
									<img src="images/slider-proyectos/1.jpg" class="img-responsive" />	
								</li>
								<li class="text-center">
									<img src="images/slider-proyectos/1.jpg" class="img-responsive" />	
								</li>
							</ul>
						</div>
						<div class="col-sm-6 gridder-content__content text-left">
							<h3>Conversión a Ciclo Combinado de la Central Térmica Cerro Dragón</h3>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
							<hr>
							<div class="gridder-content__content__bottom text-left">
								<p><b>Cliente: </b>Pan American Energy</p>
								<p><b>Lugar: </b>Cerro Dragón, Chubun [AR]</p>
								<p><b>Periodo: </b></p>
							</div>
						</div>
					</div>
				</div>
			</li>-->
			</section>
		<div class="clearfix"></div>
	</article>
	<div class="clearfix"></div>
<?php include('footer.php'); ?>