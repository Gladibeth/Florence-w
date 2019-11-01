<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">
  <?php wp_head(); ?>
</head>
                	<?php
   $current_file =  $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; //determina cual es la moneda que tiene la pag

?>
<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="nav-top__header">
        <div class="nav-top__content d-flex pl-4 pr-4 justify-content-between">
          <div class="main-nav__contact">
            
            
          </div>
          <div class="main-nav__redes d-flex">
            <a class="main-contact__link mr-4" target="_blank" href="mailto:ventas@banqueteriaflorence.cl">
                  <i style="color: #981b4b;" class="fa fa-envelope"></i>
                  <p style="color: #981b4b;">ventas@banqueteriaflorence.cl</p>
                </a>
            <a class="main-contact__link" target="_blank" href="tel:+56227237847">
                  <i style="color: #981b4b;" class="fa fa-phone"></i>
                  <p style="color: #981b4b;">(2) 2723 7847</p>
                </a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
              <img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/banqueteria-florence-logo.png">
            </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" id="hamburger" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos ul-nav__relative">
             <li class="nav-item">
              <a class="nav-link active" href="<?php bloginfo('url'); ?>">Home</a>
            </li>
           
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                  Eventos empresas
                </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/coffee-brak/">Coffee Break</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/desayunos/">Desayunos</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/buffet/">Buffet</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/lunch-box/">Lunch Box</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/coctel/">Cóctel</a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                  Eventos personas
                </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/buffet-evento-persona/">Buffet</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/coctel-evento-persona/">Cóctel</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" href="https://www.banqueteriaflorence.cl/menus-banqueteria/cocteleria/" role="button">
                  Cocteleria
                </a>

            </li>
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                  Pastelería
                </a>
              <ul class="dropdown-menu">

                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/tortas-artesanales/">Tortas Artesanales</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/tortas-con-disenos/">Tortas con Diseño</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/tortas-de-novios/">Tortas de Novios</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/postres-al-vaso/">Postres al vaso</a>
                </li>
                <li>
                  <a href="https://www.banqueteriaflorence.cl/menus-banqueteria/desayunos-a-domicilio/">Desayunos a Domicilio</a>
                </li>
              </ul>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/menu">Menus</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  