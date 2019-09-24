<section class="main-post">
  <div class="container">
    <div class="main-general__title">
      <p>Blog</p>
    </div>
    <div class="main-post__content">
      <?php $args = array( 'cat=50', 'posts_per_page' => 3); ?>   
      <?php $loop = new WP_Query( 'post_type=post&cat=-50' ); ?>
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
      <!-- <div class="main-post__item">
        <div class="main-post__img">
          <img
            src="https://www.banqueteriaflorence.cl/wp-content/uploads/2019/07/WhatsApp-Image-2019-06-26-at-13.39.59.jpeg">
        </div>
        <div class="main-post__box">
          <div class="main-post__title">
            <p>REGALA FELICIDAD A TUS COLABORADORES</p>
          </div>
          <div class="main-post__description">
            <p>¿Tienes una empresa y buscas obsequios corporativos para entregarle a tus colaboradores, a tus clientes
              más fieles o para sorprender en un evento promocional?</p>
          </div>
          <div class="main-post__btn">
            <button class="btn_custom btn--medium btn--filled">
              Leer más
            </button>
          </div>
        </div>
      </div>
      <div class="main-post__item">
        <div class="main-post__img">
          <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2019/06/Florence-montaje-1.jpg">
        </div>
        <div class="main-post__box">
          <div class="main-post__title">
            <p>EL MEJOR BUFFET DE EMPRESAS EN BANQUETERÍA</p>
          </div>
          <div class="main-post__description">
            <p>Como bien sabemos, en una compañía las comidas y banquetes son una parte más de los negocios.</p>
          </div>
          <div class="main-post__btn">
            <button class="btn_custom btn--medium btn--filled">
              Leer más
            </button>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>