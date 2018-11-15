<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'home');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> '',
	);

	include('header.php');

?>

	<article>
		<section id="index-1" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 text-center">
						<h2><?= $txt[SECCION][0] ?></h2>
						<p><?= $txt[SECCION][1] ?></p>
						<a href="http://edvsa.com/brochure.pdf" class="btn-green"><?= $txt['gral'][0] ?> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-4 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						 	<p class="title h4"><span><span class="icn icn-star"></span></span><?= $txt[SECCION][2] ?></p>
						 	<p class="paragraph-2">
							 	<?= $txt[SECCION][3] ?>
							 	<?= $txt[SECCION][4] ?>
							 	<?= $txt[SECCION][5] ?>
							 	<?= $txt[SECCION][6] ?>
							 	<?= $txt[SECCION][7] ?>
							 	<?= $txt[SECCION][8] ?>
						 	</p>
						 	<a href="<?=url('empresa')?>#datos-clave" class="btn-green"><?= $txt['gral'][1] ?> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
					</div>
					<div class="col-sm-4 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						 	<p class="title h4"><span><span class="icn icn-calendar"></span></span><?= $txt[SECCION][9] ?></p>
						 	<p class="paragraph-2">
							 	<?= $txt[SECCION][10] ?>
						 	</p>
						 	<a href="<?=url('empresa')?>#empresa-historia" class="btn-green"><?= $txt['gral'][1] ?> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
					</div>
					<div class="col-sm-4 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
						 	<p class="title h4"><span><span class="icn icn-eye"></span></span><?= $txt[SECCION][11] ?></p>
						 	<p class="paragraph-2">
						 		<?= $txt[SECCION][12] ?>
						 	</p>
						 	<a href="<?=url('empresa')?>#vision" class="btn-green"><?= $txt['gral'][1] ?> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</section>
		<section id="slider-home">
				<div>
					<ul class="slider-interno owl-carousel">
						<li><img src="images/slider-intenro-1.jpg" class="img-responsive" alt=""></li>
						<li><img src="images/slider-intenro-2.jpg" class="img-responsive" alt=""></li>
					</ul>
				</div>
		</section>
		<section id="index-2" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 text-center">
						<h3><?= $txt[SECCION][13] ?></h3>
						<p><?= $txt[SECCION][14] ?></p>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 text-center">
						<div class="row">
							<div class="index-2__image">
								<img src="images/home-1.jpg" class="img-responsive" alt="">
								<a href="<?=url('negocios')?>#negocios-servicios" class="index-2__image__hover">
									<h3 class="color-2 text-center">Servicios O&M</h3>
									<div href="javascript:;" class="h4 text-center verde color-2">+</div>

								</a>
							</div>
							<div class="index-2__image">
								<img src="images/home-2.jpg" class="img-responsive" alt="">
								<a href="<?=url('negocios')?>#negocios-energia" class="index-2__image__hover">
									<h3 class="color-2 text-center">Energía</h3>
									<div href="javascript:;" class="h4 text-center verde color-2">+</div>

								</a>
							</div>
							<div class="index-2__image">
								<img src="images/home-3.jpg" class="img-responsive" alt="">
								<a href="<?=url('negocios')?>#oilgas" class="index-2__image__hover">
									<h3 class="color-2 text-center">Oil & Gas</h3>
									<div href="javascript:;" class="h4 text-center verde color-2">+</div>

								</a>
							</div>
							<div class="index-2__image">
								<img src="images/home-4.jpg" class="img-responsive" alt="">
								<a href="<?=url('negocios')?>#negocios-mineria" class="index-2__image__hover">
									<h3 class="color-2 text-center">Minería</h3>
									<div href="javascript:;" class="h4 text-center verde color-2">+</div>

								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="index-3" class="banda verde">
				<div class="container">
					<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="col-xs-12 text-center">
							<h3><?= $txt[SECCION][15] ?></h3>
							<p><?= $txt[SECCION][16] ?></p>
						</div>
					</div>
					<div class="row text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="col-sm-6 col-md-5 col-md-offset-1">
							<h4><?= $txt[SECCION][17] ?></h4>
							<ul class="unstyled-list list-chevron color-2">
								<li><?= $txt[SECCION][18] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][19] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][20] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][21] ?></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-5">
							<h4><?= $txt[SECCION][22] ?></h4>	
							<ul class="unstyled-list list-chevron color-2">
								<li><?= $txt[SECCION][23] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][24] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][25] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][26] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][27] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][28] ?></li>
							</ul>
						</div>
					</div>
					<div class="row text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="col-sm-6 col-md-5 col-md-offset-1">
							<h4><?= $txt[SECCION][29] ?></h4>
							<ul class="unstyled-list list-chevron color-2">
								<li><?= $txt[SECCION][30] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][31] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][32] ?></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-5">
							<h4><?= $txt[SECCION][33] ?></h4>
							<ul class="unstyled-list list-chevron color-2">
								<li><?= $txt[SECCION][34] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][35] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][36] ?></li>
								<div class="clearfix visible-xs"></div>
								<li><?= $txt[SECCION][37] ?></li>
							</ul>
						</div>
					</div>
				</div>
		</section>
		<section id="index-4" class="banda">
			<div class="container">
				<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-12 text-center">
						<h3><?= $txt[SECCION][38] ?></h3>
						<p><?= $txt[SECCION][39] ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php include('slider-lugares.php'); ?>
		<section id="index-5">
			<img src="images/location-0.jpg" alt="" class="hidden-xs location-0 img-responsive">
			<img src="images/location-1.jpg" alt="" class="hidden-xs location-1 img-responsive" style="display: none;">
			<img src="images/location-2.jpg" alt="" class="hidden-xs location-2 img-responsive" style="display: none;">
			<div class="index-5__sedes">
				<div class="index-5__sedes__sede hidden-xs" onclick="myClick(0);">
					<div class="marker"></div>
					<div class="clearfix"></div>
					<p class="color-1"><?= $txt[SECCION][40] ?></p>
					<div class="index-5__sedes__sede__hover1 hidden">
						<p class="paragraph-2 text-left"><?= $txt[SECCION][41] ?></p>
						<i class="fa fa-caret-up color-1" aria-hidden="true"></i>
					</div>
					<div class="index-5__sedes__sede__hover2">
						<i class="fa fa-caret-down color-1" aria-hidden="true"></i>
						<p class="paragraph-2"><?= $txt[SECCION][42] ?></p>
					</div>

				</div>
				<div class="index-5__sedes__sede hidden-xs" onclick="myClick(1);">
					<div class="marker"></div>
					<div class="clearfix"></div>
					<p class="color-1"><?= $txt[SECCION][43] ?></p>
					<div class="index-5__sedes__sede__hover1 hidden">
						<p class="paragraph-2 text-left"><?= $txt[SECCION][44] ?></p>
						<i class="fa fa-caret-up color-1" aria-hidden="true"></i>
					</div>
					<div class="index-5__sedes__sede__hover2">
						<i class="fa fa-caret-down color-1" aria-hidden="true"></i>
						<p class="paragraph-2"><?= $txt[SECCION][45] ?></p>
					</div>

				</div>
				<div class="index-5__sedes__sede hidden-xs" onclick="myClick(2);">
					<div class="marker"></div>
					<div class="clearfix"></div>
					<p class="color-1"><?= $txt[SECCION][46] ?></p>
					<div class="index-5__sedes__sede__hover1 hidden">
						<p class="paragraph-2 text-left"><?= $txt[SECCION][47] ?></p>
						<i class="fa fa-caret-up color-1" aria-hidden="true"></i>
					</div>
					<div class="index-5__sedes__sede__hover2">
						<i class="fa fa-caret-down color-1" aria-hidden="true"></i>
						<p class="paragraph-2"><?= $txt[SECCION][48] ?></p>
					</div>

				</div>
			</div>
		</section>
		<div id="map"></div>
	    <script type="text/javascript">
				
				var markers = [];

		    	function initMap() {
		    		
					// The array where to store the markers

		    			// MARCADORES
					var locations = [
					  ['Dr. Ricardo Rojas 401', -34.4519777, -58.5323324],
					  ['Trabajadores de la Industria', -38.9011383, -68.0938761],
					  ['Centro de Operaciones y Administración CRD', -45.8954247, -67.5427345]
					];

				  // Create an array of styles.
					var styles = [
					    {
					        "featureType": "all",
					        "elementType": "all",
					        "stylers": [
					            {
					                "saturation": "-100"
					            }
					        ]
					    },
					    {
					        "featureType": "administrative",
					        "elementType": "all",
					        "stylers": [
					            {
					                "hue": "#ff0000"
					            },
					            {
					                "saturation": "-100"
					            }
					        ]
					    },
						{
					        elementType: "label",
					        stylers: [
					            {
					                "hue": "#ff0000"
					            },
					            {
					                "saturation": "-100"
					            }
					        ]							
						}					    
					];

					// Create a new StyledMapType object, passing it the array of styles,
					// as well as the name to be displayed on the map type control.
					var styledMap = new google.maps.StyledMapType(styles,
					{name: "Styled Map"});

					var myLatlng = new google.maps.LatLng(-34.5949888, -58.3755215);
					var mapOptions = {
						zoom: 17,
						center: myLatlng,
						mapTypeControlOptions: {
						  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
						}
					};

					var map = new google.maps.Map(document.getElementById('map'),
					mapOptions);

					//Associate the styled map with the MapTypeId and set it to display.
					map.mapTypes.set('map_style', styledMap);
					map.setMapTypeId('map_style');


				  	//MARKERS
				    var infowindow = new google.maps.InfoWindow();

				    var marker, i;

				    for (i = 0; i < locations.length; i++) {  
				      marker = new google.maps.Marker({
				        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				        map: map, 
				        region: "AR",
				        icon: 'images/marker2.png'
				      });
			  		marker.setMap(map);

					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  infowindow.setContent(locations[i][0]);
						  infowindow.open(map, marker);
						}
					})(marker, i));
					var sede = document.getElementsByClassName('index-5__sedes__sede');
					google.maps.event.addListener(sede, 'click', (function(marker, i) {
						return function() {
						  infowindow.setContent(locations[i][0]);
						  infowindow.open(map, marker);
						}
					})(marker, i));

			            // Push the marker to the 'markers' array
			            markers.push(marker);					   				  
				}
			}
			    // The function to trigger the marker click, 'id' is the reference index to the 'markers' array.
		    function myClick(id) {
		        google.maps.event.trigger(markers[id], 'click');
		        console.log('location-'+id);
		        var index5height = $('#index-5').height();
		        console.log(index5height);
		        $('#index-5').css('height', index5height);
		        $('#index-5 .img-responsive').fadeOut();
		        setTimeout( function() {
		        	$('.location-'+id).fadeIn();
			        $('#index-5').css('height', 'auto');
		        }, 500);
						        	
		    }					

	    </script>
	    <script async defer
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD43Dm3Khg397i0SZ1j4iQTU_cVOx7hM6s&region=AR&callback=initMap">
	    </script>
	    <script>
	    	console.log('15');
	    </script>	    
	</article>
	<?php include('footer.php'); ?>
</main>
</body>