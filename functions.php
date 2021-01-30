<?php
/**
 *
 *  Izy shop functions and definitions
 *
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentytwenty_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 1200 );

	// Add custom image size used in Cover Template.
    add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );
    

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentytwenty' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
}

add_action( 'after_setup_theme', 'twentytwenty_theme_support' );


// Style - bootstrap - Carousel

function izyshop_theme_stylesheets() {
    
	// theme style
	wp_enqueue_style ('style', get_stylesheet_uri());
    
    // bootstrap style
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), '4.0', 'all' );

	// owl carousel  css
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/lib/owl.carousel/assets/owl.carousel.min.css', array(), '2.2.0' );

	// aos  css
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/lib/aos/aos.css', array(), '2.2.0' );

}

add_action( 'wp_enqueue_scripts', 'izyshop_theme_stylesheets' );


// js - jquery - bootstrap - carousel

function izyshop_theme_js() {

	// jquery js
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), '3.3.1', true);

	// slider JS
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '1.0', true );
	
	// Theme JS
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js', array( 'jquery' ), '3.0.0', true );

	// Bootstrap js
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js' , array( 'jquery' ), '4.1.2', true );

	// Theme JS
	wp_enqueue_script( 'bootstrapbundle', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), '4.0.0', true );

	// waypoints JS
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/lib/waypoints/jquery.waypoints.min.js', array( 'jquery' ), '4.0.0', true );

	// owlscripte JS
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/lib/owl.carousel/owl.carousel.js', array( 'jquery' ), '4.0.0', true );

	// aos JS
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/lib/aos/aos.js', array( 'jquery' ), '4.0.0', true );

	// Theme JS
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/jquery.easing/jquery.easing.min.js', array( 'jquery' ), '4.0.0', true );
	
    // popper js
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ), '4.1.2', true );

	// Theme JS
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
    
}

add_action( 'wp_enqueue_scripts', 'izyshop_theme_js' );


if ( ! function_exists( 'izyshop_register_nav_menu' ) ) {
 
    function izyshop_register_nav_menu(){
		
        register_nav_menus( array(
            'categories' => __( 'Categories', 'text_domain' ),
            'footer'  => __( 'Footer', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'izyshop_register_nav_menu', 0 );
}



/// WooCommerce Option


add_filter( 'woocommerce_product_single_add_to_cart_text', 'change_text_btn_addtocart');

function change_text_btn_addtocart( $button ) {
	$button_new = '&raquo; ' . $button;
	return $button_new;
}


// Part 1
// Edit Single Product Page Add to Cart
 
add_filter( 'woocommerce_product_single_add_to_cart_text', 'bbloomer_custom_add_cart_button_single_product' );
 
function bbloomer_custom_add_cart_button_single_product( $label ) {
    
   foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
      $product = $values['data'];
      if( get_the_ID() == $product->get_id() ) {
         $label = __('Already in Cart. Add again?', 'woocommerce');
      }
   }
    
   return $label;
 
}
 
// Part 2
// Edit Loop Pages Add to Cart
 
add_filter( 'woocommerce_product_add_to_cart_text', 'bbloomer_custom_add_cart_button_loop', 99, 2 );
 
function bbloomer_custom_add_cart_button_loop( $label, $product ) {
    
   if ( $product->get_type() == 'simple' && $product->is_purchasable() && $product->is_in_stock() ) {
       
      foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
         $_product = $values['data'];
         if( get_the_ID() == $_product->get_id() ) {
            $label = __('Already in Cart. Add again?', 'woocommerce');
         }
      }
       
   }
    
   return $label;
    
}

//Remove price from result Google

add_filter( 'woocommerce_structured_data_product_offer', '__return_empty_array' );

// remove the content navbar from checkoutpage
add_action( 'wp', 'bbloomer_unhook_storefront_functions' );
 
function bbloomer_unhook_storefront_functions() {
   if ( is_checkout() ) {
      remove_all_actions( 'storefront_header' );
      remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
      remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
      remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
   }
}
