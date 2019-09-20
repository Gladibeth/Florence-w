<?php get_header();?>
  <section class="main-parallax main-how">
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
          <button class="btn_custom btn--medium btn--full" data-target="#quotation" data-toggle="modal" type="button">
              Contacto
            </button>
        </div>
    
          <div class="main-product main-product__padding">
            <div class="container">
              <div class="main-product__content">
                <?php include('archive-menus.php'); ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="main-gallery">
    <div class="container">
      <div class="main-general__title">
        <p>Galería</p>
      </div>
      <div class="main-gallery__content">
        <?php $args = array( 'post_type' => 'Galería', 'posts_per_page' => 6); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-gallery__item">
            <div class="main-gallery__img">
              <img
                src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
          </div>
        <?php endwhile; ?>
        
      </div>
    </div>
  </section>
  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="<?php the_field('pdf')?>" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contáctanos</h5>
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:500px;border:0;margin:0;overflow:hidden" src="<?php the_field('pdf')?>" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           
        </div>
      </div>
    </div>
  </div>
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
  
  <?php get_footer();?>