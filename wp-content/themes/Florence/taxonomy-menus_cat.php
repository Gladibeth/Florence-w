<?php get_header();?>
  <section class="main-parallax main-how">
    <div class="overlay"></div>
    <div class="main-general__info main-general__info--white main-general__info--left">
      <div class="main-parallax__title">
       <?php single_cat_title(); ?>
      </div>
    </div>
  </section>
  <section class="main-category">
    <div class="container">
      <div class="main-category__box">
        <div class="btn-fullright">
          <button class="btn_custom btn--medium btn--full" data-target="#quotation" data-toggle="modal" type="button">
              Contacto
            </button>
        </div>
        <!-- <div class="main-category__content">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item nav-item__tabs">
              <a aria-controls="categoty-1" aria-selected="true" class="nav-link active" data-toggle="tab" href="#categoty-1" id="categoty-1-tab" role="tab">COFFEE BREAK EXPRESS</a>
            </li>
            <li class="nav-item nav-item__tabs">
              <a aria-controls="category-2" aria-selected="false" class="nav-link" data-toggle="tab" href="#category-2" id="category-2-tab" role="tab">COFFEE BREAK TRADICIONAL</a>
            </li>
            <li class="nav-item nav-item__tabs">
              <a aria-controls="category-3" aria-selected="false" class="nav-link" data-toggle="tab" href="#category-3" id="category-3-tab" role="tab">COFFEE BREAK ESPECIAL</a>
            </li>
            <li class="nav-item nav-item__tabs">
              <a aria-controls="category-4" aria-selected="false" class="nav-link" data-toggle="tab" href="#category-4" id="category-4-tab" role="tab">COFFEE BREAK DELUXE</a>
            </li>
            <li class="nav-item nav-item__tabs">
              <a aria-controls="category-5" aria-selected="false" class="nav-link" data-toggle="tab" href="#category-5" id="category-5-tab" role="tab">COFFEE BREAK DIRECTORIO</a>
            </li>
          </ul> -->
          <?php $wcatTerms = get_terms('menus_cat', array('hide_empty' => 1, 'parent' =>0)); 
foreach($wcatTerms as $wcatTerm) : 
  ?>


      <?php
      $wsubargs = array(
        'hierarchical' => 1,
        'show_option_none' => '',
        'hide_empty' => 1,
        'parent' => $wcatTerm->term_id,
        'taxonomy' => 'menus_cat',
        'posts_per_page' => 2
      );
      $wsubcats = get_categories($wsubargs);
      foreach ($wsubcats as $wsc):
        ?>
      


              <h3><?php echo $wsc->name; ?></h3>

<?php include('archive-menus.php'); ?>
 <?php
    endforeach;
    ?>

<?php 
endforeach; 
?>
          <div class="main-product main-product__padding">
            <div class="container">
              <div class="main-product__content">










<!-- end -->
             <!--    <div class="main-product__item">
                  <div class="main-product__img">
                    <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
                  </div>
                  <div class="main-product__box">
                    <div class="main-product__title">
                      <p>COFFE BREAK VAJILLA DE LOZA</p>
                    </div>
                    <div class="main-product__description">
                      <p>$3.800 + IVA por persona</p>
                    </div>
                  </div>
                </div>
                <div class="main-product__item">
                  <div class="main-product__img">
                    <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                  </div>
                  <div class="main-product__box">
                    <div class="main-product__title">
                      <p>COFFE BREAK VAJILLA DESECHABLE</p>
                    </div>
                    <div class="main-product__description">
                      <p>$3.800 + IVA por persona</p>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- <div class="tab-content" id="myTabContent">
            <div aria-labelledby="categoty-1-tab" class="tab-pane fade show active" id="categoty-1" role="tabpanel">
              <div class="main-product main-product__padding">
                <div class="container">
                  <div class="main-product__content">
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DE LOZA</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="menuscat-2-tab" class="tab-pane fade" id="category-2" role="tabpanel">
              <div class="main-product main-product__padding">
                <div class="container">
                  <div class="main-product__content">
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DE LOZA</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="category-3-tab" class="tab-pane fade" id="category-3" role="tabpanel">
              <div class="main-product main-product__padding">
                <div class="container">
                  <div class="main-product__content">
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DE LOZA</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="category-4-tab" class="tab-pane fade" id="category-4" role="tabpanel">
              <div class="main-product main-product__padding">
                <div class="container">
                  <div class="main-product__content">
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DE LOZA</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="category-5-tab" class="tab-pane fade" id="category-5" role="tabpanel">
              <div class="main-product main-product__padding">
                <div class="container">
                  <div class="main-product__content">
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-loza-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DE LOZA</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                    <div class="main-product__item">
                      <div class="main-product__img">
                        <img src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable-300x114.png">
                      </div>
                      <div class="main-product__box">
                        <div class="main-product__title">
                          <p>COFFE BREAK VAJILLA DESECHABLE</p>
                        </div>
                        <div class="main-product__description">
                          <p>$3.800 + IVA por persona</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <?php get_footer();?>