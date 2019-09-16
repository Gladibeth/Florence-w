<section class="main-contact">
  <div class="container">
    <div class="main-contact__content">
      <div class="main-contact-item">
        <div class="main-contact__info">
          <div class="main-general__title">
            <p>Contáctanos</p>
          </div>
          <div class="main-contact__description">
            <p>Ésta es la vía correcta, para hacer llegar y deseas hacer un reclamo, Felicitacitarnos o realizar
              consultas generales.</p>
          </div>
          <div class="main-contact__data">
            <ul class="main-contact__ul">
              <li>
                <a class="main-contact__link" href="#">
                  <i class="fa fa-envelope"></i>
                  <p>ventas@banqueteriaflorence.cl</p>
                </a>
              </li>
              <li>
                <a class="main-contact__link" href="#">
                  <i class="fa fa-location-arrow"></i>
                  <p>Verde N° 12595, La Florida (Metro Elisa Correa)</p>
                </a>
              </li>
              <li>
                <a class="main-contact__link" href="tel:(2)27237847">
                  <i class="fa fa-phone"></i>
                  <p>(2) 2723 7847</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="main-contact__redes">
            <ul class="main-contact__ul main-contact__ul--inline">
              <li>
                <a class="main-contact__social" href="https://www.facebook.com/BanqueteriaFlorence/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a class="main-contact__social" href="https://www.instagram.com/banqueteriaflorence/" target="_blank">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="main-contact-item">
        <div class="main-contact__form">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
        <!-- <form action="">
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput" placeholder="Nombre y apellido" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="phone">
          </div>
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput2" placeholder="Mensaje" type="text">
          </div>
          <div class="btn-box float-right">
            <button class="btn_custom btn--medium btn--filled">
              Enviar
            </button>
          </div>
        </form> -->
        </div>
      </div>
    </div>
  </div>
</section>