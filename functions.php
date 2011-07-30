<?php
/**
 * CodeMusings Framework functions and definitions
 *
 * @package cmframework
 * @version 0.1
 * @since CodeMusings Framework 0.1
 */

/**
 * Run cmf_setup() when the after_setup_theme hook runs.
 */
add_action( 'after_setup_theme', 'cmf_setup' );

if( ! function_exists( 'cmf_setup' ) ) :
/**
 * @TODO Add comments
 */
function cmf_setup() {

    /* Make framework available for translation
     * Translations should be added to the /languages/directory.
     */
    load_theme_textdomain( 'cmframework', TEMPLATEPATH . '/languages' );

    $locale = get_locale();
    $locale_file = TEMPLATEPATH . "/languages/$locale.php";
    if ( is_readable( $locale_file ) )
        require_once( $locale_file );

    // Add default posts and comments RSS feed links to <head>
    add_theme_support( 'automatic-feed-links' );

    // This theme uses wp_nav_menu() in one location
    register_nav_menu( 'primary', __( 'Primary Menu', 'cmframework' ) );

    // Add support for a variety of post formats
    add_theme_support( 'post_formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

    // This theme uses Features Images for Custom Header images
    add_theme_support( 'post-thumbnails' );
}
endif;
if ( ! function_exists( '_log' ) ) :
function _log( $message ) {
    if ( WP_DEBUG === true ) {
        if ( is_array( $message ) || is_object( $message ) ) {
            error_log( print_r( $message, true ) );
        } else {
            error_log( $message ); 
        }
    }
}
endif;
?>
