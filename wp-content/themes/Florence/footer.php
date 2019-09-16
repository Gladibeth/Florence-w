<footer class="main-footer">
    <div class="container">
      <div class="main-footer__copy">
        <p>
          <a href="http://cmarketing.cl/">
              Contact Marketing 
            </a> Todos los derechos Reservados
        </p>
      </div>
    </div>
  </footer>
  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contáctanos</h5>
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <form>
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
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
         });
  </script>
  <?php wp_footer();?>
</body>

</html>