<?php get_header();?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="main-banner">
      <div class="main-postblog__content">
        <div class="main-banner__items">

          <div class="main-banner__item main-banner__item--post">
            <div class="main-banner__text">
              <div class="main-banner__title main-banner__title--post">
                <p><?php the_title(); ?></p>
              </div>
            </div>
            <div class="main-banner__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- <section class="main-parallax main-how" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);height: 75vh;background-position: 58% -60px;">
      <div class="overlay"></div>
      <div class="main-general__info main-general__info--white main-general__info--left">
        <div class="main-parallax__title">
         
        </div>
      </div>
    </section> -->
    <section class="main-blogpost">
      <div class="container">
        <div class="main-blogpost__content">
          <div class="main-blogpost__item">
            
            <div class="main-blogpost__box">
              <div class="main-blogpost__first">
                <div class="main-blogpost__date">
                  <p><?php the_time(get_option('date_format')); ?></p>
                </div>
                <span class="line">/</span>
                <div class="main-blogpost__category">
                  <span class="badge badge-custom"><?php the_category(', ') ?></span>
                </div>
              </div>
              <div class="main-blogpost__description">
                <p><?php the_content();  ?></p>
              </div>
            </div>
        
          </div>
          <div class="main-blogpost__item">
            <div class="main-blogpost__box">
              <div class="main-blogpost__title">
                <p>Radio de accion directo</p>
              </div>
              <ul class="main-blogpost__ul">
                <?php $args = array( 'cat=50'); ?>   
                <?php $loop = new WP_Query( 'cat=50' ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <li>
                    <a href="<?php the_permalink()?>"></a> <?php the_title()?>
                  </li>
                <?php endwhile; ?>
                  <!-- <li>
                    <a href=""></a> Las conde
                  </li>
                  <li>
                    <a href=""></a> Las reina
                  </li>
                  <li>
                    <a href=""></a> Macul
                  </li>
                  <li>
                    <a href=""></a> Santiago
                  </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
  <?php endwhile; ?>
  <?php get_template_part('partials/index/contact'); ?>
  <?php get_footer(); ?>