<?php while ( have_posts() ) : the_post(); ?>

  <div class="main-product__item">
    <a href="" data-target="#menu-<?php the_id()?>" data-toggle="modal">
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
 
<?php while ( have_posts() ) : the_post(); ?>
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