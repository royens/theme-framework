<?php
/**
 * Template for the sidebar layout.
 *
 * @package cmframework
 * @version 0.1
 * @since CodeMusings Framework 0.1
 */
?>

<div id="secondary" class="widget-area" role="complementary">
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'cmframework' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>

        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php _e( 'Meta', 'cmframework' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>

    <?php endif; ?>
</div><!-- #secondary .widget-area -->
