<?php get_header();?>
  <section class="main-parallax main-how" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/NUESTROS MENU.png');height: 75vh;background-position: 58% -60px;" >
    <div class="overlay"></div>
    <div class="main-general__info main-general__info--white main-general__info--left">
      <div class="main-parallax__title">
        Nuestro menú
      </div>
    </div>
  </section>
  <section class="main-product main-product__padding">
    <div class="container">
      <div class="btn-fullright">
          <button class="btn_custom btn--medium btn--full" data-target="#quotation" data-toggle="modal" type="button">
              Contacto
            </button>
        </div>
      <div class="main-product__content">
        <?php $args = array( 'post_type' => 'menus', 'posts_per_page' => -1); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); if(get_field('galeria') != 1): ?>
          <div class="main-product__item">
            <a href="#menu-<?php the_id()?>" data-target="#menu-<?php the_id()?>" data-toggle="modal">
              <div class="main-product__img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              </div>
            </a>
            <div class="main-product__box">
              <div class="main-product__title">
                <p><?php the_title(); ?></p>
              </div>
              <div class="main-product__description">
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
<?php endif; endwhile; ?>

        <?php $args = array( 'post_type' => 'menus'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="menu-<?php the_id()?>" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document" style="max-width: 750px;">
              <div class="modal-content">
                <div class="modal-header">
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="height:500px;width:700px;border:0;margin:0;overflow:hidden" src="<?php the_field('pdf')?>" allow="autoplay; encrypted-media" tabindex="999"></iframe>
                  
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
    
      </div>
    </div>
  </section>

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
  
  <?php get_template_part('partials/index/contact'); ?>
  <?php get_footer();?>