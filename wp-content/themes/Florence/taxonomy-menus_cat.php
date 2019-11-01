<?php get_header();

$menus_ID = get_query_var('menus_cat');
?>
  <?php if ( $menus_ID == 'coffee-brak' ): ?>
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/COFFEE BREAK.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'desayunos' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/DESAYUNOS EVENTOS EMPRESAS.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'buffet' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/BUFFET EMPRESAS.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'lunch-box' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/LUNCH BOX.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'coctel' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/COCTEL EVENTOS EMPRESAS.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'buffet-evento-persona' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/BUFFET PERSONAS.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'coctel-evento-persona' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/COCTEL EVENTOS PERSONAS.png);height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'cocteleria' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/COCTELERIA.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'tortas-artesanales' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/TORTAS ARTESANALES.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'tortas-con-disenos' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/diseños.jpg');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'tortas-de-novios' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/TORTAS DE NOVIOS.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'postres-al-vaso' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/postres-al-vaso-17.png');height: 75vh;background-position: 58% -60px;" >
  <?php elseif ( $menus_ID == 'desayunos-a-domicilio' ): ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/DESAYUNOS A DOMICILIO.JPG');height: 75vh;background-position: 58% -60px;" >
  <?php else: ?> 
    <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog.png');height: 75vh;background-position: 58% -60px;" >
  <?php endif; ?>
    <div class="overlay"></div>
    <div class="main-general__info main-general__info--white main-general__info--left">
      <div class="main-parallax__title">
       <?php single_cat_title(); ?>
      </div>
    </div>
  </section>
  <section class="main-category">
    <div class="container">
      <div class="main-category__box">
       
        <div class="btn-fullright">
        <?php if ( $menus_ID == 'cocteleria' ): ?>
           
            <button class="btn_custom btn--medium btn--full" data-target="#pdf-cocteleria" data-toggle="modal" type="button">
              Ver valores 
            </button>
          <?php elseif ( $menus_ID == 'tortas-artesanales' ): ?> 
<button class="btn_custom btn--medium btn--full" data-target="#pdf-tortas-artesanales" data-toggle="modal" type="button">
              Ver valores 
            </button>
          <?php elseif ( $menus_ID == 'tortas-de-novios' ): ?> 
<button class="btn_custom btn--medium btn--full" data-target="#pdf-tortas-novios" data-toggle="modal" type="button">
              Ver valores 
            </button>
          <?php elseif ( $menus_ID == 'tortas-con-disenos' ): ?> 
<button class="btn_custom btn--medium btn--full" data-target="#pdf-tortas-diseño" data-toggle="modal" type="button">
              Ver valores 
            </button>
          <?php elseif ( $menus_ID == 'postres-al-vaso' ): ?> 
<button class="btn_custom btn--medium btn--full" data-target="#pdf-postre" data-toggle="modal" type="button">
              Ver valores 
            </button>
          <?php elseif ( $menus_ID == 'desayunos-a-domicilio' ): ?> 
<button class="btn_custom btn--medium btn--full" data-target="#pdf-desayunos" data-toggle="modal" type="button">
              Ver valores 
            </button>
            <?php elseif ( $menus_ID == 'lunch-box' ): ?> 
<button class="btn_custom btn--medium btn--full" data-target="#pdf-lunch-box" data-toggle="modal" type="button">
              Ver valores 
            </button>

           <?php else: ?> 
            <button class="btn_custom btn--medium btn--full" data-target="#quotation" data-toggle="modal" type="button">
                Contacto 
              </button>
           
           <?php endif; ?>

        </div>
          <div class="main-blogpost__box" style="padding:20px;">
   
              <div class="main-blogpost__description">
                 <p> <?php echo category_description(); ?></p>
               
              </div>
            </div>
      
          <div class="main-product main-product__padding">
            <div class="container">
                <?php include('archive-menus.php'); ?>
              
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('partials/index/contact'); ?>

  <!-- Modal -->

  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="quotation" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cotiza con nosotros</h5>
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
         
        </div>
      </div>
    </div>
  </div>

  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-cocteleria" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/COCTELERIA_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
 
 <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-tortas-artesanales" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/REPOSTERIA_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
 
 <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-tortas-novios" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/TORTAS DE NOVIOS_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
 
 <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-tortas-diseño" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/CATALOGO TORTAS CON DISEÑO_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
 
 <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-postre" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/POSTRES AL VASO_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
 
 <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-desayunos" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/regalos a domicilio_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="pdf-lunch-box" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php echo get_template_directory_uri(); ?>/assets/img/VALORES_LUNCH_MENU_2019.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
 
  

  
  <?php get_footer();?>

