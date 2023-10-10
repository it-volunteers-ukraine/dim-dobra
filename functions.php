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
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array('swiper-scripts', 'jquery-scripts'), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/helpform.php') ) {
    wp_enqueue_style( 'helpform-style', get_template_directory_uri() . '/assets/styles/template-styles/helpform.css', array('main') );
    wp_enqueue_script( 'helpform-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/help-form.js', array(), false, true );
  }  

  if ( is_page_template('templates/blog-template.php') ) {
    wp_enqueue_style( 'blog-style', get_template_directory_uri() . '/assets/styles/template-styles/blog-template.css', array('main') );
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

  if (is_singular() && locate_template('template-parts/breadcrumbs.php')) {
      wp_enqueue_style( 'breadcrumbs-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/breadcrumbs.css', array('main') );
      }

  if (is_singular() && locate_template('template-parts/post-file.php')) {
      wp_enqueue_style( 'post-file-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/post-file.css', array('main') );
      }

  if (is_singular() && locate_template('template-parts/navigation.php')) {
      wp_enqueue_style( 'navigation-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/navigation.css', array('main') );
      }

  if (is_singular() && locate_template('template-parts/content-post.php')) {
     wp_enqueue_style( 'post-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-post.css', array('main') );
      wp_enqueue_script( 'post-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/content-post.js', array(), false, true );
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

/** Display a representative image for Posts, Pages or Custom Post Types*/
add_theme_support( 'post-thumbnails' );

/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}

/** length of excerpted text on blog-page */

add_filter( 'excerpt_length', function(){
	return 20;
} );

add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );

/**Link to a Page Rather Than the Category Archive in a Breadcrumb*/

add_filter('bcn_breadcrumb_url', 'my_breadcrumb_url_changer', 3, 10);
function my_breadcrumb_url_changer($url, $type, $id)
{
    if(in_array('category', $type) && (int) $id === 4)
    {
        $url = get_permalink(6);
    } else if(in_array('category', $type) && (int) $id === 5)
    {
        $url = get_permalink(8);
    } else {$url = get_home_url();}
    return $url;
}