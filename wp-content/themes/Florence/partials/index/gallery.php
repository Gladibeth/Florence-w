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
      <!-- <div class="main-gallery__item">
        <div class="main-gallery__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-34.png">
        </div>
      </div>
      <div class="main-gallery__item">
        <div class="main-gallery__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-21.png">
        </div>
      </div>
      <div class="main-gallery__item">
        <div class="main-gallery__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-28.png">
        </div>
      </div>
      <div class="main-gallery__item">
        <div class="main-gallery__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-16.png">
        </div>
      </div>
      <div class="main-gallery__item">
        <div class="main-gallery__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-7.png">
        </div>
      </div> -->
    </div>
  </div>
</section>