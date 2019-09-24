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

<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
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
                      <?php $wcatTerms = get_terms('menus_cat', array('hide_empty' => 0, 'parent' =>0)); 
foreach($wcatTerms as $wcatTerm) : 
  ?>


       <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>" role="button">
                 <?php echo $wcatTerm->name; ?>
                </a>
              <ul class="dropdown-menu">

            <?php 
            $wsubarg = array(
              'hierarchical' => 1,
              'show_option_none' => '',
              'hide_empty' => 0,
              'parent' => $wcatTerm->term_id,
              'taxonomy' => 'menus_cat'
              
            );
            $subcat = get_categories($wsubarg);
            foreach($subcat as $sub) : ?>
<li class="nav-item">
              <a class="nav-link " href="<?php echo get_term_link( $sub->slug, $sub->taxonomy );?>"><?php echo $sub->name;?></a>
            </li>
              

  
            <?php 
          endforeach; 
          ?>
              </ul>
            </li>


            

    

<?php 
endforeach; 
?>
           
         <!-- 
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                  Eventos personas
                </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Buffet</a>
                </li>
                <li>
                  <a href="#">Cóctel</a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                  Cocteleria
                </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="category.html">Galería Cocteleria</a>
                </li>
                <li>
                  <a href="#">Listado de precios</a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                  Pastelería
                </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Tortas Artesanales</a>
                </li>
                <li>
                  <a href="#">Tortas con Diseño</a>
                </li>
                <li>
                  <a href="#">Tortas de Novios</a>
                </li>
                <li>
                  <a href="#">Postres al vaso</a>
                </li>
                <li>
                  <a href="#">Desayunos a Domicilio</a>
                </li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/blog-all">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/menu">Menus</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>