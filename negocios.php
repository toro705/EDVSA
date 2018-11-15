<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'negocios');

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
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<h2><?= $txt[SECCION][0] ?></h2>
						<p><?= $txt[SECCION][1] ?></p>
					</div>
				</div>

		</section>	
		<section id="oilgas" class="verde">
			<div class="left verde">
				<div class="left__container wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h3 class="color-2"><?= $txt[SECCION.'_oilgas'][0] ?></h3>
					<p class="color-2"><?= $txt[SECCION.'_oilgas'][1] ?></p>
					<div>
						<div class="left__container__list">
							<p class="color-2"><b><?= $txt[SECCION.'_oilgas'][2] ?></b></p>
							<ul class="list-check">
								<li><?= $txt[SECCION.'_oilgas'][3] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][4] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][5] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][6] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][7] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][8] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][9] ?></li>
							</ul>
						</div>
						<div class="left__container__list">
							<p class="color-2"><b><?= $txt[SECCION.'_oilgas'][10] ?></b></p>
							<ul class="list-check">
								<li><?= $txt[SECCION.'_oilgas'][11] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][12] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][13] ?></li>
								<li><?= $txt[SECCION.'_oilgas'][14] ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="right"></div>
		</section>		
		<section id="negocios-energia" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<h3><?= $txt[SECCION.'_energia'][0] ?></h3>
						<p><?= $txt[SECCION.'_energia'][1] ?></p>

					</div>
				</div>
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-sm-4">
						<p><b><?= $txt[SECCION.'_energia'][2] ?></b></p>
						<ul class="list-check">
							<li><?= $txt[SECCION.'_energia'][3] ?></li>
							<li><?= $txt[SECCION.'_energia'][4] ?></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<p><b><?= $txt[SECCION.'_energia'][5] ?></b></p>
						<ul class="list-check">
							<li><?= $txt[SECCION.'_energia'][6] ?></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<p><b><?= $txt[SECCION.'_energia'][7] ?></b></p>
						<ul class="list-check">
							<li><?= $txt[SECCION.'_energia'][8] ?></li>
						</ul>
					</div>
				</div>

			</div>
		</section>	
		<section>
			<ul class="lugares">
				<?php foreach(Proyecto::obtener(array('destacados' => 3, 'area' => ENERGIA)) as $proy){
					include('templates/mod-proyecto-grande.php');
				} ?>

				<!-- <li>
					<img src="images/proyectos/1.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>PICO TRUNCADO, <br>SANTA CRUZ [AR]</b></p>
						<hr>	
						<h4 class="color-2">Montaje de <br>Parque Eólico PT</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	WOBBEN WINDPOWER</p>			
					</div>
				</li>
				<li>
					<img src="images/proyectos/2.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>Cerro Dragón, <br>Chubut [AR]</b></p>
						<hr>	
						<h4 class="color-2">Conversión a Ciclo <br>Combinado de la Central Térmica Cerro Dragón</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	WOBBEN WINDPOWER</p>			
					</div>
				</li>
				<li>
					<img src="images/proyectos/3.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>MENDOZA [AR]</b></p>
						<hr>	
						<h4 class="color-2">Construcción y <br>puesta en marcha <br>de oleoducto</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	YPF</p>			
					</div>
				</li> -->
			</ul>
		</section>		
		<section id="negocios-desarrollo" class="banda verde">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12">
						<h3 class="color-2 text-center"><?= $txt[SECCION.'_desarrollo'][0] ?></h3>
					</div>
				</div>
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-md-7 pull-right">
						<p class="color-2"><?= $txt[SECCION.'_desarrollo'][1] ?></p>

						<ul class="list-check">
							<li><?= $txt[SECCION.'_desarrollo'][2] ?></li>
							<li><?= $txt[SECCION.'_desarrollo'][3] ?></li>
							<li><?= $txt[SECCION.'_desarrollo'][4] ?></li>
							<li><?= $txt[SECCION.'_desarrollo'][5] ?></li>
						</ul>
					</div>
					
				</div>
			</div>
		</section>
		<section id="negocios-mineria" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<h3><?= $txt[SECCION.'_mineria'][0] ?></h3>
						<p><?= $txt[SECCION.'_mineria'][1] ?>
						</p>
						<ul class="list-inline list-check">
							<li><b><?= $txt[SECCION.'_mineria'][2] ?></b></li>
							<li><b><?= $txt[SECCION.'_mineria'][3] ?></b></li>
							<li><b><?= $txt[SECCION.'_mineria'][4] ?></b></li>
						</ul>
					</div>
				</div>
			</div>		
		</section>
		<section>
			<ul class="lugares">
				<?php foreach(Proyecto::obtener(array('destacados' => 3, 'area' => MINERIA)) as $proy){
					include('templates/mod-proyecto-grande.php');
				} ?>
				<!--<li>
					<img src="images/proyectos/1.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>PICO TRUNCADO, <br>SANTA CRUZ [AR]</b></p>
						<hr>	
						<h4 class="color-2">Montaje de <br>Parque Eólico PT</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	WOBBEN WINDPOWER</p>			
					</div>
				</li>
				<li>
					<img src="images/proyectos/2.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>Cerro Dragón, <br>Chubut [AR]</b></p>
						<hr>	
						<h4 class="color-2">Conversión a Ciclo <br>Combinado de la Central Térmica Cerro Dragón</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	WOBBEN WINDPOWER</p>			
					</div>
				</li>
				<li>
					<img src="images/proyectos/3.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>MENDOZA [AR]</b></p>
						<hr>	
						<h4 class="color-2">Construcción y <br>puesta en marcha <br>de oleoducto</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	YPF</p>			
					</div>
				</li>-->
			</ul>
		</section>			
		<section id="negocios-servicios" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
						<h3><?= $txt[SECCION.'_servicios'][0] ?></h3>
						<p><?= $txt[SECCION.'_servicios'][1] ?>
						</p>
					</div>
				</div>
			</div>		
		</section>
		<section>
			<ul class="lugares">
				<?php foreach(Proyecto::obtener(array('destacados' => 3, 'area' => SERVICIOS)) as $proy){
					include('templates/mod-proyecto-grande.php');
				} ?>
				<!-- <li>
					<img src="images/proyectos/1.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>PICO TRUNCADO, <br>SANTA CRUZ [AR]</b></p>
						<hr>	
						<h4 class="color-2">Montaje de <br>Parque Eólico PT</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	WOBBEN WINDPOWER</p>			
					</div>
				</li>
				<li>
					<img src="images/proyectos/2.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>Cerro Dragón, <br>Chubut [AR]</b></p>
						<hr>	
						<h4 class="color-2">Conversión a Ciclo <br>Combinado de la Central Térmica Cerro Dragón</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	WOBBEN WINDPOWER</p>			
					</div>
				</li>
				<li>
					<img src="images/proyectos/3.jpg" class="img-responsive" alt="">
					<div class="lugares__cont">
						<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
						<p class="paragraph-2 color-2"><b>MENDOZA [AR]</b></p>
						<hr>	
						<h4 class="color-2">Construcción y <br>puesta en marcha <br>de oleoducto</h4>
						<hr>	
					    <p class="paragraph-2 color-2">Cliente: <br>	YPF</p>			
					</div>
				</li> -->
			</ul>
		</section>			
	</article>
<?php include('footer.php'); ?>