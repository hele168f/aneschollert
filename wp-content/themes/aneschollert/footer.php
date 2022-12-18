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
      <div class="grid-footer">
          <div class="kontakt-info">
            <p> Kontakt <p>
            <p>as@aneschollert.dk</p>
            <p>Tlf. 27 64 11 91</p>
            
          </div>
          <div class="some-info">
            <a href="https://www.instagram.com/aschollert/"><img src="<?php echo get_stylesheet_directory_uri() ?>/pictures/instagram.png" alt="instagram icon"></a>
          </div>
        
          <div class="åbningstider-info">
            <p>Åbningstider</p>
            <p>Mandag-Fredag 10-19</p>
        </div>
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

