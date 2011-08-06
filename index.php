<?php
/**
 * Main template file.
 *
 * Generic file used to display a page when nothing
 * more specific matches a query.
 *
 * @package cmframework
 * @version 0.1
 * @since CodeMusings Framework 0.1
 */
?>

<?php get_header(); ?>

        <div id="primary" class="g7 alpha">
            <div id="content" role="main">

                <?php if ( have_posts() ) : ?>

                    <?php cmframework_content_nav( 'nav-above' ); ?>

                    <?php while ( have_posts() ) : the_post(); /* Start of the loop */ ?>

                        <?php get_template_part( 'content', get_post_format() ); ?>
                    
                    <?php endwhile; ?>

                <?php else : ?>

                    <article id="post-0" class="post no-results not-found">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php _e( 'Nothing Found', 'cmframework' ); ?></h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?php _e( 'Unfortunately, no results were found for the requested archive. Perhaps the server ate them. If you think searching for something related might help use the handy search feature below.', 'cmframework' ); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-0 -->
            
                <?php endif; ?>

            </div><!-- #content -->
        </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
