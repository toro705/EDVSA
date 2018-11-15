<?php

//Defino la URL actual
if(! defined('URL_SECCION')){
  define('URL_SECCION', url(SECCION));
}

include('metas.php');

?>
<!DOCTYPE html>
<html lang="<?= IDIOMA ?>">
  <head>
    <meta charset="utf-8">

    <title><?= $metas['titulo']?></title>
    <meta name="description"            content="<?= $metas['descripcion'];?>"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card"           content="summary_large_image"/>
    <meta name="twitter:site"           content="@<?= Empresa::$redes['tw'] ?>"/>
    <meta name="twitter:title"          content="<?= $metas['titulo'] ?>" />
    <meta name="twitter:description"    content="<?= $metas['descripcion'];?>" />
    <meta name="twitter:image"          content="<?= $metas['img'] ?>" />

    <!-- Open Graph data -->
    <meta property="og:title"           content="<?= $metas['titulo'] ?>" />
    <meta property="og:description"     content="<?= $metas['descripcion'];?>"/>
    <meta property="og:image"           content="<?= $metas['img']; ?>" />
    <meta property="og:site_name"       content="<?= Empresa::$nombre; ?>"/>
    <meta property="og:url"             content="<?= URL_SECCION; ?>"/>

    <meta name="robots"   content="all">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <base href="<?= BASE_URL ?>">

    <link rel="canonical" href="<?= URL_SECCION ?>" />
    <?php
    if( count(json_decode(IDIOMA_ENABLED)) > 1 ){
      $dato_url = isset(${SECCION}) ? ${SECCION} : null;
      foreach(json_decode(IDIOMA_ENABLED) AS $lang){
          echo '   <link rel="alternate" hreflang="'.$lang.'" href="'.url(SECCION, $dato_url, $lang).'" />'."\r\n";
      }
    }
    ?>


    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/images/favicons/manifest.json">
    <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <?php if (SECCION == 'proyecto_resultado') { ?>
      <link href="css/jquery.gridder.min.css" rel="stylesheet">
    <?php } ?>
    <?php
     // Uno y minifico todos los CSS comunes a todas las páginas

    $main_css = $minified->merge( 'css/main.min.css', 'css', array(
            'css/bootstrap.min.css',
            'css/dropdown.min.css',
            'js/jquery.owl.carousel/assets/owl.carousel.css',
            'css/styles-theme.css'
        ));
    echo ' <link rel="stylesheet" href="'.$main_css.'?v='.filemtime(BASE_PATH.$main_css).'" />'."\r\n";?>


    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:300,400|Titillium+Web:200,300,400,600,700" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document" class="<?= 's_'.SECCION ?>">

<!-- GOOGLE ANALYTICS --
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66587613-6', 'auto');
  ga('send', 'pageview');

</script>
<!-- GOOGLE ANALYTICS -->

  <header class="cabecera" id="home">
    <nav class="navbar anim-suave">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <div class="navbar-header">
              <button class="hamburger hamburger--efecto visible-xs" type="button" aria-label="Menu" aria-controls="cabecera-navbar-collapse" data-toggle="collapse" data-target=".js-navbar-cabecera">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
              <a class="cabecera__logo anim-suave text-left" href="<?=url('home')?>">
                <img class="img-responsive anim-suave" src="images/logo_nav-principal-cabecera.png" alt="<?=Empresa::$nombre?>">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-9">
            <div class="navbar-collapse collapse js-navbar-cabecera" id="cabecera-navbar-collapse">
              <nav class="nav-secundaria">
                  <div class="js-desplegable nav-secundaria__idioma icono anim-suave">
                    <a class="js-desplegable-enlace"><?=(IDIOMA == 'es') ? 'Esp' : 'Eng'?></a>
                    <ul class="js-desplegable-contenido" style="display: none;">
                      <li><a href="<?=url(SECCION, isset(${SECCION}) ? ${SECCION} : null, ((IDIOMA == 'es') ? 'en' : 'es'))?>"><?=(IDIOMA == 'es') ? 'Eng' : 'Esp'?></a></li>
                    </ul>
                  </div>
              </nav>
              <div class="clearfix"></div>
              <nav class="nav-principal anim-suave">
                <ul>
                  <li><a href="<?=url('home')?>"><i class="fa fa-home"></i></a></li>
                  <li><a href="<?=url('empresa')?>"><?=$txt['nav'][0]?></a></li>
                  <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$txt['nav'][1]?></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?=url('negocios')?>"><?=$txt['nav'][16]?></a></li>
                      <li><a href="<?=url('negocios-modalidad')?>"><?=$txt['nav'][17]?></a></li>
                    </ul>
                  </li>
                  <li><a href="<?=url('experiencia')?>"><?=$txt['nav'][2]?></a></li>
                  <li><a href="<?=url('contacto')?>"><?=$txt['nav'][3]?></a></li>
                </ul>
              </nav>
             
            </div>
          </div>
        </div>
      </div>
    </nav>
      <!-- HEADERS -->
      <?php if(SECCION == 'home'){ 
        Plugins::activar('owlCarousel');
        Plugins::activar('enlaces-internos');
        ?>
        <div class="slider-principal">
          <ul class="owl-carousel">
            <?php foreach ($txt['slider_home'] as $i => $slide) {
              $indice = $i+1;
                echo '<li style="background-image: url(images/slider-principal/'.$indice.'.jpg)">
                  <div class="slider-principal__contenido">
                    <div class="container">
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="slider-principal__texto">
                            <h1>'.$slide.'</h1>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>';
              } ?>
          </ul>
        </div>
      <?php }else{
        switch (SECCION) {
          case 'noticia':
          case 'noticias':
            $header = 'noticias';
            break;

          case 'proyecto':
            $header = false;
            break;
          
          default:
            $header = SECCION;
            break;
      }

        if($header){?>
          <div id="headerimgs">
            <div class="headerimgs" style="background-image: url(images/cabeceras/<?=$header?>.jpg)">
              <div class="headerimgs__contenido">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                      <div class="headerimgs__texto">
                        <h1><?=$metas['slider']?></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
    <?php } ?>
    <!-- HEADERS -->

  </header>
  <!-- Sección principal -->
  <main id="main" role="main">