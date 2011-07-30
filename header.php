<?php
/**
 * The header for cmframework.
 *
 * Displays from opening doctype tag to <div id="main">
 *
 * @package cmframework
 * @version 0.1
 * @since CodeMusings Framework 0.1
 */
?>
<!doctype html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php 
/* Define a constant that the user can set.
 */
define( TITLE_SEP, cm_get_theme_option( 'title_sep' ) );
/*
 * Print title based on page user is on.
 */
global $page, $paged;

wp_title( TITLE_SEP, true, 'right' );

// Add blog name
bloginfo( 'name' );

// Add blog description for home/front page
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
    echo ' ' . TITLE_SEP . ' ' . $site_description;

// Add a page number if necessary
if ( $paged >= 2 || $page >= 2 )
    echo ' ' . TITLE_SEP . ' ' . sprintf( __( 'Page %s', 'cmframework' ), max( $paged, $page ) );
?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
/*
 * Add some JavaScript to support threaded comments
 */
if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <header id="branding" role="banner">
        <hgroup>
            <h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
        </hgroup>

        <nav id="access" role="navigation">
            <h3 class="assistive-text"><?php _e( 'Main menu', 'cmframework' ); ?></h3>
            <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'cmframework' ); ?>"><?php _e( 'Skip to primary content', 'cmframework' ); ?></a></div>
            <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'cmframework' ); ?>"><?php _e( 'Skip to secondary content', 'cmframework' ); ?></a></div>
            <?php /* The main nav menu. If user doesn't create a menu falls back to wp_page_menu. */ ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #access -->
    </header><!-- #branding -->

    <div id="main">
