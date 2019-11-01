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
  <?php wp_footer();?>
</body>

</html>