<?php

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//* Initialize Genesis
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme Definitions
define( 'CHILD_THEME_NAME', 'cmohr' );
define( 'CHILD_THEME_URL', 'http://cmohr.ca/' );
define( 'CHILD_THEME_VERSION', '2.1.1' );

// Accessibility
require_once( CHILD_DIR . '/includes/attributes.php' );
require_once( CHILD_DIR . '/includes/dropdown.php' );
require_once( CHILD_DIR . '/includes/forms.php' );
require_once( CHILD_DIR . '/includes/headings.php' );
require_once( CHILD_DIR . '/includes/heading.php' );
require_once( CHILD_DIR . '/includes/skip-links.php' );
//require_once( CHILD_DIR . '/includes/widgets.php' ); turns off genesis widgets
//require_once( CHILD_DIR . '/includes/wp-modification.php' ); changes READD MORE and I want to add my own

// Handy functionality
require_once( CHILD_DIR . '/includes/widget-counter.php' );


/*
*******************************
Theme Basics
*******************************
*/

//* Enqueue Lato Google font
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {
	wp_enqueue_style( 'google-font-lato', '//fonts.googleapis.com/css?family=Lato:300,700', array(), CHILD_THEME_VERSION );
}

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
//add_theme_support( 'custom-background' );

// Add support for editor stylesheet
// add_editor_style( 'style-editor.css' );

// Run all the things
// require_once( CHILD_DIR . '/lib/file.php' );


/*
*******************************
Genesis - Common Mods
*******************************
*/

//* Add support for 3-column footer widgets
//add_theme_support( 'genesis-footer-widgets', 3 );

//* Unregister layout settings
// genesis_unregister_layout( 'content-sidebar' );
// genesis_unregister_layout( 'sidebar-content' );
// genesis_unregister_layout( 'content-sidebar-sidebar' );
// genesis_unregister_layout( 'sidebar-sidebar-content' );
// genesis_unregister_layout( 'sidebar-content-sidebar' );
// genesis_unregister_layout( 'full_width_content' );


//* Unregister widget areas
// unregister_sidebar( 'sidebar' );
// unregister_sidebar( 'sidebar-alt' );
// unregister_sidebar( 'header-right' );

//* Force full-width-content layout setting
// add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Add support for structural wraps
// add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'site-inner', 'footer-widgets', 'footer' ) );

//* Unregister secondary navigation menu
// add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'cmohr' ) ) );

//* Reposition the primary navigation menu
// remove_action( 'genesis_after_header', 'genesis_do_nav' );
// add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_nav' );

//* Reposition the secondary navigation menu
// remove_action( 'genesis_after_header', 'genesis_do_subnav' );
// add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_subnav' );

//* Reposition the site description
// remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
// add_action( 'genesis_before_content_sidebar_wrap', 'genesis_seo_site_description' );

//* Relocate the post info
// remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
// add_action( 'genesis_entry_header', 'genesis_post_info', 5 );

//* Add post pagination
// add_action( 'genesis_entry_footer', 'genesis_prev_next_post_nav' );

//* Add support for post format images
// add_theme_support( 'genesis-post-format-images' );

//* Add Oops! to 404 page
/* add_action( 'genesis_loop', 'expose_404_page', 9 );
	function expose_404_page() {
	if ( is_404() ) {
		echo '<div class="oops-404"><p>' . __( 'Oops!', 'expose' ) . '</p></div>';
	}
} */

//* Add custom body class to the head
/* add_filter( 'body_class', 'beautiful_custom_body_class' );
function beautiful_custom_body_class( $classes ) {

	$classes[] = 'beautiful';
	return $classes;

} */

//* Disable the superfish script
/* add_action( 'custom_disable_superfish', 'sp_disable_superfish' );
function sp_disable_superfish() {
	wp_deregister_script( 'superfish' );
	wp_deregister_script( 'superfish-args' );
} */

//* Customize search form input box text
/* add_filter( 'genesis_search_text', 'magazine_search_text' );
function magazine_search_text( $text ) {

	return esc_attr( __( 'Search the site ...', 'magazine' ) );
	
} */

//* Customize search form input box text
/* add_filter( 'genesis_search_text', 'sp_search_text' );
function sp_search_text( $text ) {
	return esc_attr( 'Search my blog...' );
} */

//* Customize search form input button text
/* add_filter( 'genesis_search_button_text', 'sp_search_button_text' );
function sp_search_button_text( $text ) {
	return esc_attr( 'Go' );
} */

/*
*******************************
WP - common mods and functions
*******************************
*/

//* Add additional image sizes - below is simply a placeholder
// add_image_size( 'mini', 50, 50, true );

//* Modify the WordPress read more link
/*add_filter( 'the_content_more_link', 'cmohr_read_more' );
function cmohr_read_more() {

	return '<a class="more-link" href="' . get_permalink() . '">' . __( 'Continue Reading', 'cmohr' ) . '</a>';

} */

//* Add support for post formats
// add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'link', 'image', 'quote', 'status', 'video'  ) );


/*
*******************************
Widget Areas
*******************************
*/

genesis_register_sidebar( array(
	'id'          => 'home-top',
	'name'        => __( 'Home Top', 'cmohr' ),
	'description' => __( 'This is the top section of the homepage.', 'cmohr' ),
) );