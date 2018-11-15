<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'contacto');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2]
	);

	include('header.php');

?>

	<article>
		<section id="contacto-mapa" class="hidden-xs ">
			<div class="contacto__sedes">
				<div class="contacto__sedes__sede hidden-xs" onclick="myClick(0);">
					<div class="marker"></div>
					<div class="clearfix"></div>
					<p class="color-1"><?= $txt[SECCION.'_sedes'][0] ?></p>
					<div class="contacto__sedes__sede__hover2">
						<i class="fa fa-caret-right color-1" aria-hidden="true"></i>
						<p class="paragraph-2"><?= $txt[SECCION.'_sedes'][2] ?></p>
					</div>
				</div>

				<div class="contacto__sedes__sede hidden-xs" onclick="myClick(1);">
					<div class="marker"></div>
					<div class="clearfix"></div>
					<p class="color-1"><?= $txt[SECCION.'_sedes'][3] ?></p>
					<div class="contacto__sedes__sede__hover2">
						<i class="fa fa-caret-right color-1" aria-hidden="true"></i>
						<p class="paragraph-2"><?= $txt[SECCION.'_sedes'][5] ?></p>
					</div>
				</div>

				<div class="contacto__sedes__sede hidden-xs" onclick="myClick(2);">
					<div class="marker"></div>
					<div class="clearfix"></div>
					<p class="color-1"><?= $txt[SECCION.'_sedes'][6] ?></p>
					<div class="contacto__sedes__sede__hover2">
						<i class="fa fa-caret-right color-1" aria-hidden="true"></i>
						<p class="paragraph-2"><?= $txt[SECCION.'_sedes'][7] ?></p>
					</div>

				</div>

			</div>	

			<div id="map" class="hidden-xs"></div>
		    <script type="text/javascript">
					var markers = [];
					// The array where to store the markers

			    	function initMap() {
		    			// MARCADORES
						var locations = [
						  ['Dr. Ricardo Rojas 401', -34.4519777, -58.5323324],
						  ['Trabajadores de la Industria', -38.9011383, -68.0938761],
						  ['Centro de Operaciones y Administración CRD', -45.8954247, -67.5427345],	
						  ['Base Operativa Rincón de los Sauces', -37.234148, -68.542281] ,
						  ['Base Operativa Las Heras', -46.33439, -68.553947],
						  ['Base Operativa Los Perales', -46.115566, -69.16076],
						  ['Base Operativa Cañadón Seco', -46.33039, -67.363365],
						  ['Base Operativa Rio Gallegos', -51.40838, -69.15676],
						  ['San Juan', -31.5317707, -68.5676962],
						  ['Base Cerro Dragón', -45.7418334,-68.3139549],
						  ['Base Valle Hermoso', -45.7593263,-68.4888209],
						  ['Base Añelo', -38.3543262,-68.7897972],
						  ['Base Manantiales Behr', -45.6730401,-67.7585352],
						];
					  // ESTILOS
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
						    }
					  ];

					  // CREACION NUEVO MAPA CON ESTILOS
					  var styledMap = new google.maps.StyledMapType(styles,
					    {name: "Styled Map"});


					  var mapOptions = {
					    zoom: 4,
					    //disableDefaultUI: true,
					    navigationControl: false,
					    mapTypeControl: false,
					    scaleControl: false,
					    draggable: false,
    					center: new google.maps.LatLng(-37.8368913,-71.6175821	),
					    mapTypeControlOptions: {
					      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
					    }
					  };
					

					    //IMPLEMENTANDO ESTILOS		  
					  var map = new google.maps.Map(document.getElementById('map'),
					    mapOptions);



					  map.mapTypes.set('map_style', styledMap);
					  map.setMapTypeId('map_style');
					  	//MARKERS
					    var infowindow = new google.maps.InfoWindow();

					    var marker, i;

					    for (i = 0; i < locations.length; i++) {  
					      marker = new google.maps.Marker({
					        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					        map: map, 
					        icon: 'images/marker2.png'
					      });
					  		marker.setMap(map);

					      google.maps.event.addListener(marker, 'click', (function(marker, i) {
					        return function() {
					          infowindow.setContent(locations[i][0]);
					          infowindow.open(map, marker);
					        }
					      })(marker, i));
					      var sede = document.getElementsByClassName(' 	contacto__sedes__sede');
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
				    function myClick(id){
				        google.maps.event.trigger(markers[id], 'click');
				    }					
		    </script>
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD43Dm3Khg397i0SZ1j4iQTU_cVOx7hM6s&callback=initMap"></script>
			<div class="contacto-list hidden-xs">
				<p class="color-2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms"><b><?= $txt[SECCION.'_list'][0] ?></b></p>
				<ul class="list-chevron-circle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<li><?= $txt[SECCION.'_list'][1] ?></li>
					<li><?= $txt[SECCION.'_list'][2] ?></li>
					<li><?= $txt[SECCION.'_list'][3] ?></li>
					<li><?= $txt[SECCION.'_list'][4] ?></li>
					<li><?= $txt[SECCION.'_list'][5] ?></li>
				</ul>
			</div>
		</section>
		<section class="banda blanca">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-4 text-center">
						<h2><?=$txt[SECCION][0]?></h2>
					</div>
				</div>
				<div class="row">
					<div id="form-contacto" class="col-xs-12 col-md-8 col-md-offset-2">
						<?php include('forms/contacto.php'); ?>
						<?php echo $form_contacto->mensaje_estado ?>
						<?php if ($form_contacto->estado != 'ok') { ?>
							<form class="form-horizontal formulario" role="form" method="post" action="<?=url('contacto')?>#form-contacto">
				                <div class="form-group">
				                	<label class="control-label col-xs-12 col-md-3"><?=$txt[SECCION][1]?>:</label>
				                	<div class="col-xs-12 col-md-9">
				                    	<input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>" />
				                    </div>
				                </div>
				                <div class="form-group">
				                	<label class="control-label col-xs-12 col-md-3"><?=$txt[SECCION][2]?>:</label>
				                	<div class="col-xs-12 col-md-9">
				                    	<input class="form-control" type="email" id="email" name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" />
				                    </div>
				                </div>
				                <div class="form-group">
				                	<label class="control-label col-xs-12 col-md-3"><?=$txt[SECCION][3]?>:</label>
				                	<div class="col-xs-12 col-md-9">
				                    	<input class="form-control" type="tel" id="telefono" name="telefono" value="<?php echo (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>" />
				                    </div>
				                </div>
				                <div class="form-group">
				                	<label class="control-label col-xs-12 col-md-3"><?=$txt[SECCION][4]?>:</label>
				                	<div class="col-xs-12 col-md-9">
				                    	<input class="form-control" type="text" id="asunto" name="asunto" value="<?php echo (isset($_POST['asunto'])) ? $_POST['asunto'] : ''; ?>" />
				                    </div>
				                </div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-md-3"><?=$txt[SECCION][5]?>:</label>
				                	<div class="col-xs-12 col-md-9">
				                		<textarea class="form-control" id="mensaje" name="mensaje" ><?php echo (isset($_POST['mensaje'])) ? $_POST['mensaje'] : ''; ?></textarea>
				                	</div>
				                </div>
								<div class="form-group">
				                	<div class="col-xs-12 col-md-9 col-md-offset-3">
				                		<div class="form-captcha">
											<?= $form_contacto->campos['captcha']->html() ?>
										</div>
									</div>
								</div>
								<div class="form-group">
				                	<div class="col-xs-12 co l-md-9 col-md-offset-3 text-left">
				                		<div class="form-boton">
				                    		<button class="btn-green2" type="submit" name="enviar_contacto"><?=$txt[SECCION][6]?>  <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
				                    	</div>
				                    </div>
				                </div>
							</form>
						<?php } ?>
					</div>
	            	
	            </div>
			</div>
		</section>
		<section class="visible-xs text-center banda" style="background: #98989b;">
			<div class="contacto-list">
				<p class="color-2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms"><b><?= $txt[SECCION.'_list'][0] ?></b></p>
				<ul class="list-chevron-circle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<li><?= $txt[SECCION.'_list'][1] ?></li>
					<li><?= $txt[SECCION.'_list'][2] ?></li>
					<li><?= $txt[SECCION.'_list'][3] ?></li>
					<li><?= $txt[SECCION.'_list'][4] ?></li>
					<li><?= $txt[SECCION.'_list'][5] ?></li>
					<li><?= $txt[SECCION.'_list'][6] ?></li>
					<li><?= $txt[SECCION.'_list'][7] ?></li>
				</ul>
			</div>			
		</section>
	</article>

<?php include('footer.php'); ?>