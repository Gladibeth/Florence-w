<?php get_header();?>
  <div class="main-banner">
    <div class="main-postblog__content">
      <div class="main-banner__items">
        <?php $args = array( 'post_type' => 'Blog'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-banner__item">
            <div class="main-banner__text">
              <div class="main-banner__title main-banner__title--post">
                <p><?php the_title(); ?></p>
              </div>
            </div>
            <div class="main-banner__img">
              <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/01/servicios-de-banqueteria-florence.cl-17.png">
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <section class="main-blogpost">
    <div class="container">
      <div class="main-blogpost__content">
        <div class="main-blogpost__item">
          <?php $args = array( 'post_type' => 'Blog'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="main-blogpost__box">
              <div class="main-blogpost__first">
                <div class="main-blogpost__date">
                  <p>10/09/2019</p>
                </div>
                <span class="line">/</span>
                <div class="main-blogpost__category">
                  <span class="badge badge-custom">Aniversario</span>
                </div>
              </div>
              <div class="main-blogpost__description">
                <p>Banquetería y Repostería Florence es una de esas compañías que se convierten en el sustento de una familia durante generaciones. Abierto desde hace casi 9 años, este establecimiento ha logrado crecer y aprender de sus errores, siempre buscando
                  la mejora constante de sus procesos y servicios.</p>
                <p>“Desde el primer día, hemos logrado consolidarnos ganándonos una clientela fiel que nos ha permitido mantenernos pese al paso de los años. Con la idea de que el negocio tenga una vida duradera, hemos renovado un poco la cara del local dando
                  continuidad al buen trabajo que hemos venido desarrollando desde el año 2010”, afirma Nenita Ramírez, una de sus dueñas y fundadora.</p>
                <p>Nuestro negocio cuenta con un respaldo por parte de nuestros conocidos, colaboradores y clientes que nos han permitido persistir durante todo este tiempo, convirtiéndonos en el aliado que día a día muchos distinguidos eligen para comenzar
                  su día de una manera dulce y con precios accesibles.</p>
                <p>Banquetería y Repostería Florence es un negocio que cuida de los rasgos y que ofrece una gran variedad de menús para todo tipo de clientela, entre ellos están los pasteles y tortas, coctelería, desayunos, pan fresco, dulces, entre otras.
                  Sus instalaciones, además del buen trato que entregan al cliente, han permitido a esta gran familia seguir adelante con el negocio.</p>
                <p>“Todos nuestros productos son fabricados por nuestro equipo de trabajo, cuyo sello de calidad es la preocupación por los detalles y dedicación en lo que hacen. Nosotros nos esmeramos cada día por entregar lo mejor, en todos nuestros productos
                  y servicios, teniendo como resultado clientes felices y satisfechos que vuelven y nos recomiendan, nos cuenta Ximena Núñez, socia fundadora.</p>
              </div>
            </div>
          <?php endwhile; ?>
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
  <?php get_footer(); ?>