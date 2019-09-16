<div class="main-banner">
  <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__items">
        <div class="main-banner__item">
          <div class="main-banner__text">
            <div class="main-banner__title">
              <p><?php the_title(); ?></p>
            </div>
            <div class="main-banner__description">
              <p><?php the_content(); ?></p>
            </div>
          </div>
          <div class="main-banner__img">
            <img
              src="<?php echo get_the_post_thumbnail_url(); ?>">
            <!-- <img
              src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-17.png"> -->
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <!-- <div class="main-banner__items">
      <div class="main-banner__item">
        <div class="main-banner__text">
          <div class="main-banner__title">
            <p>Florence</p>
          </div>
          <div class="main-banner__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati cum iure at ea aliquid ullam vero
              sit eligendi, consequuntur vel ut quasi! Iste sunt doloribus, quibusdam eveniet commodi minus quis?</p>
          </div>
        </div>
        <div class="main-banner__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-21.png">
        </div>
      </div>
    </div> -->
  </div>
</div>