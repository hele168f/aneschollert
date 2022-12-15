<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

/**
 * Executes actions before main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_before_primary_end' ); ?>

</main><!--/.neve-main-->

<footer>
      <div class="flex-row">
          <div class="footer-navn"><h5>as@aneschollert.dk</h5></div>
          <div class="footer-insta">
            <a href="https://www.instagram.com/aschollert/"><img src="Pictures/instagram.png" alt="instagram icon"></a></div>
        
          <div class="footer-telefon"><a href="tel:+4527641191"><h5>Tlf. 27 64 11 91</h5></a></div>
      </div>
    </footer>

</div><!--/.wrapper-->
<?php

wp_footer();

/**
 * Executes actions before the body tag is closed.
 *
 * @since 2.11
 */
do_action( 'neve_body_end_before' );

?>
</body>

</html>

