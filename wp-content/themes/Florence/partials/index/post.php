<section class="main-post">
  <div class="container">
    <div class="main-general__title">
      <p>Blog</p>
    </div>
    <div class="main-post__content">

      <?php $loop = new WP_Query( 'post_type=post&cat=-50&posts_per_page=3'); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-post__item">
          <div class="main-post__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="main-post__box">
            <div class="main-post__title">
              <p><?php the_title(); ?></p>
            </div>
            <div class="main-post__description">
              <p><?php echo excerpt(30); ?></p>
            </div>
            <a href="<?php the_permalink();?>" class="main-post__btn">
              <button class="btn_custom btn--medium btn--filled">
                Leer más
              </button>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>