<section class="main-about">
  <div class="container">
    <div class="main-about__content">
      <div class="main-about__line">
        <div class="main-about__img">
          <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2019/07/FLORENCE-01-1.jpg">
        </div>
      </div>
      <div class="main-about__box">
        <div class="main-general__title">
          <p>Quiénes somos</p>
        </div>
        <div class="main-about__description">
          <div class="main-about__text">
            <div class="main-about__subtitle">
              <p>Vision</p>
            </div>
            <div class="main-about__subdescrition">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos nemo, suscipit et reiciendis animi
                exercitationem expedit.</p>
            </div>
          </div>
          <div class="main-about__text">
            <div class="main-about__subtitle">
              <p>Mision</p>
            </div>
            <div class="main-about__subdescrition">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos nemo, suscipit et reiciendis animi
                exercitationem expedit.</p>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <button class="btn_custom btn--medium btn--filled" data-target="#exampleModal" data-toggle="modal"
            type="button">
            Contacto
          </button>
        </div>
      </div>
    </div>
    <div class="main-about__team">
      <div class="main-about__item">
        <div class="main-about__titleteam">
          <p>Equipo</p>
        </div>
        <div class="main-about__descriptionteam">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="main-about__block">
        <?php $args = array( 'post_type' => 'Equipo'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-about__boxteam">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        <?php endwhile; ?>
        <!-- <div class="main-about__boxteam">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/4.jpg">
        </div>
        <div class="main-about__boxteam">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/3.jpg">
        </div>
        <div class="main-about__boxteam">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/2.jpg">
        </div> -->
      </div>
    </div>
  </div>
</section>