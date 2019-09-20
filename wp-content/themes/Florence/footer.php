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
          <iframe id="fancybox-frame" name="fancybox-frame1569003494281" style="border:0;margin:0;overflow:hidden" src="https://www.banqueteriaflorence.cl/wp-content/uploads/2018/02/coffe-break-express-vajilla-desechable.pdf" allow="autoplay; encrypted-media" tabindex="999"></iframe>
           <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>

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