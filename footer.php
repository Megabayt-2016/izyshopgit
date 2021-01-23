<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>    
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright BY <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white"><strong>Izy Shop</strong></a>
        </div>
      </div>
    </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
      <!-- Vendor JS Files -->
      <?php wp_footer(); ?>
      <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/v4-shims.js"></script>
    
  </body>
    
</html>