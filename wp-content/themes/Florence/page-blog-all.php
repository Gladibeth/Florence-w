<?php get_header();?>
</header>
<section class="main-parallax main-how">
  <div class="overlay"></div>
  <div class="main-general__info main-general__info--white">
    <div class="main-parallax__title">
      Blog
    </div>
  </div>
</section>
<section class="main-post main-post--padding">
  <div class="container">
    <div class="main-post__content">
      <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 6); ?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <a class="main-post__item" href="post-blog.html">
          <div class="main-post__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="main-post__box">
            <div class="main-post__title">
              <p><?php the_title(); ?></p>
            </div>
            <div class="main-post__description">
              <p><?php echo excerpt(30); ?></</p>
            </div>
            <a href="<?php the_permalink();?>" class="main-post__btn">
              <button class="btn_custom btn--medium btn--filled">
                Leer más
              </button>
            </a>
          </div>
        </a>
      <?php endwhile; ?>
    
    </div>
  </div>
</section>
<?php get_footer(); ?>