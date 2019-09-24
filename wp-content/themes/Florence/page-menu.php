<?php get_header();?>
  <section class="main-parallax main-how">
    <div class="overlay"></div>
    <div class="main-general__info main-general__info--white main-general__info--left">
      <div class="main-parallax__title">
        Nuestro menú
      </div>
    </div>
  </section>
  <section class="main-product main-product__padding">
    <div class="container">
      <div class="main-product__content">
        <?php $args = array( 'post_type' => 'menus'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
        <?php endwhile; ?>

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
        <!-- <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>COFFE BREAK VAJILLA DESECHABLE</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div> -->
        <!-- <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>COFFE BREAK VAJILLA DE LOZA</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div>
        <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-tradicional-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>COFFE BREAK TRADICIONAL</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div>
        <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coctel-deluxe-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>Buffet Light</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div>
        <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/buffet-tradicional-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>Buffet Tradicional</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div>
        <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/buffet-deluxe-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>buffet deluxe</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div> -->
        <!-- <div class="main-product__item">
          <div class="main-product__img">
            <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/04/tortas-tradicionales-banqueterialorence.cl_-300x114.png">
          </div>
          <div class="main-product__box">
            <div class="main-product__title">
              <p>TORTAS TRADICIONALES</p>
            </div>
            <div class="main-product__description">
              <p>$3.800 + IVA por persona</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <?php get_template_part('partials/index/contact'); ?>
  <?php get_footer();?>