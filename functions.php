<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('swiper-style', 'main') );
  
  wp_enqueue_script( 'jquery-scripts', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array('swiper-scripts'), false, true ); 

  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array('swiper-scripts'), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if (is_singular() && locate_template('template-parts/founding-documents.php')) {
    wp_enqueue_style( 'documents-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/founding-documents.css', array('main') );
    }

  if (is_singular() && locate_template('template-parts/need-help.php')) {
    wp_enqueue_style( 'need-help-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/need-help.css', array('main') );
    }

  if (is_singular() && locate_template('template-parts/need-help-animals.php')) {
      wp_enqueue_style( 'need-help-animals', get_template_directory_uri() . '/assets/styles/template-parts-styles/need-help-animals.css', array('main') );
      }
  

}

/*register img for posts */
add_theme_support( 'post-thumbnails' );

/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto' );
}
 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');
