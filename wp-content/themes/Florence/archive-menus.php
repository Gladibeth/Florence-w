   <?php while ( have_posts() ) : the_post(); ?>

                <div class="main-product__item">
                  <div class="main-product__img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                  </div>
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
 