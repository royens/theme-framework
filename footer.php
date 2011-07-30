<?php
/**
 * Template for displaying footer HTML.
 *
 * @package cmframework
 * @version 0.1
 * @since CodeMusings Framework 0.1
 */
?>
    
    </div><!-- #main -->

    <footer id="colophon" role="contentinfo">

        <?php get_sidebar( 'footer' ); ?>

        <div id="site-generator">
            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cmframework' ) ); ?>" title="<?php esc_attr_e( 'WordPress Publishing Platform', 'cmframework' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cmframework' ), 'WordPress' ); ?></a>
        </div><!-- #site-generator -->
        <div id="framework">
            <a href="<?php echo esc_url( 'http://www.codemusings.com/framework' ); ?>" title="<?php esc_attr_e( 'CodeMusings Framework for great WordPress Themes', 'cmframework' ); ?>"><?php print( __( 'Using the excellent CodeMusings Framework', 'cmframework' ) ); ?></a>
        </div><!-- #framework -->
    </footer>
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
