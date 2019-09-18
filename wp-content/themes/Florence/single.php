<?php get_header();?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="main-banner">
      <div class="main-postblog__content">
        <div class="main-banner__items">

          <div class="main-banner__item">
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
                <!-- <p>“Desde el primer día, hemos logrado consolidarnos ganándonos una clientela fiel que nos ha permitido mantenernos pese al paso de los años. Con la idea de que el negocio tenga una vida duradera, hemos renovado un poco la cara del local dando
                  continuidad al buen trabajo que hemos venido desarrollando desde el año 2010”, afirma Nenita Ramírez, una de sus dueñas y fundadora.</p>
                <p>Nuestro negocio cuenta con un respaldo por parte de nuestros conocidos, colaboradores y clientes que nos han permitido persistir durante todo este tiempo, convirtiéndonos en el aliado que día a día muchos distinguidos eligen para comenzar
                  su día de una manera dulce y con precios accesibles.</p>
                <p>Banquetería y Repostería Florence es un negocio que cuida de los rasgos y que ofrece una gran variedad de menús para todo tipo de clientela, entre ellos están los pasteles y tortas, coctelería, desayunos, pan fresco, dulces, entre otras.
                  Sus instalaciones, además del buen trato que entregan al cliente, han permitido a esta gran familia seguir adelante con el negocio.</p>
                <p>“Todos nuestros productos son fabricados por nuestro equipo de trabajo, cuyo sello de calidad es la preocupación por los detalles y dedicación en lo que hacen. Nosotros nos esmeramos cada día por entregar lo mejor, en todos nuestros productos
                  y servicios, teniendo como resultado clientes felices y satisfechos que vuelven y nos recomiendan, nos cuenta Ximena Núñez, socia fundadora.</p> -->
              </div>
            </div>
        
          </div>
          <div class="main-blogpost__item">
            <div class="main-blogpost__box">
              <div class="main-blogpost__title">
                <p>Radio de accion directo</p>
              </div>
              <ul class="main-blogpost__ul">
                <li>
                  <a href=""></a> Chicureo
                </li>
                <li>
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
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
  <?php get_footer(); ?>