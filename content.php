<?php
/**
 * Default template for displaying content.
 *
 * @package cmframework
 * @version 0.1
 * @since CodeMusings Framework 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'cmframework' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php cmframework_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>

        <?php if ( comments_open() && ! post_password_required() ) : ?>
        
            <div class="comments-link">
                <?php comments_popup_link( '<span class="leave-reply">' . __( 'Comment', 'cmframework' ) . '</span>', _x( '1', 'comments number', 'cmframework' ), _x( '%', 'comments number', 'cmframwork' ) ); ?>
            </div><!-- .comments-link -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if ( is_search() || is_archive() ) : // Only display excerpts for search and archives ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cmframework' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'cmframework' ) . '</span>', 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php
            $meta_sep = META_SEPARATOR;
            $show_sep = false;
            $categories_list = get_the_category_list( __( ', ', 'cmframework' ) );
            if ( $categories_list ) {
                printf( __( '<span class="cat-links"><span class="%1$s">Posted in </span> %2$s</span>', 'cmframework' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
                $show_sep = true;
            }
            $tags_list = get_the_tag_list( '', __( ', ', 'cmframework' ) );
            if ( $tags_list ) {
                if ( $show_sep ) {
                    echo "<span class=\"sep\"> $meta_sep </span>";
                }
                printf( __( '<span class="tag-links"><span class="%1$s">Tagged</span> %2$s</span>', 'cmframework' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
                $show_sep = true;
            }
            if ( comments_open() ) {
                if ( $show_sep ) {
                    echo "<span class=\"sep\"> $meta_sep </span>";
                }
                echo '<span class="comments-link">' . comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'cmframework' ) . '</span>', __( '<b>1</b> Comment', 'cmframework' ), __( '<b>%</b> Comments', 'cmframework' ) ) . '</span>';
                $show_sep = true;
            }
            if ( $show_sep ) {
                echo "<span class=\"sep\"> $meta_sep </span>";
            }
            edit_post_link( __( 'Edit', 'cmframework' ), '<span class="edit-link">', '</span>' ); 
        ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
