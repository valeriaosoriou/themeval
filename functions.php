<?php
//------------------------------ STYLESHEETS ------------------------------------//
function load_css() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'load_css' );

//------------------------------ MENU ------------------------------------//
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
      // 'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

  // <a> CLASS (can be done in CSS)
    add_filter('nav_menu_link_attributes', 'a_class_nav', 10, 3);
      function a_class_nav ($atts, $item, $args){
        $class = 'nav-link';
        $atts ['class'] = $class;
        return $atts;
      }

//-----------------------------------HEADER -------------------------------//
$args = array(
  'flex-width'    => true,
  'header-text'   => true,
  'width'         => 1024,
  'flex-height'   => true,
  'height'        => 300,
  'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

//----------------------------- LOGO ------------------------------------//
function themeval_custom_logo_setup() { //Adding custom logo with 5 arguments
  $defaults = array(
    'height'      => 50,
    'width'       => 50,
    'flex-height' => false,
    'flex-width'  => false,
    'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults ); 
}
add_action( 'after_setup_theme', 'themeval_custom_logo_setup' );

//-------------------------------- THUMBNAIL IMAGES POST -------------------//
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

//----------------------------------SIDEBAR ---------------------------------//
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'My primary custom sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" my-3>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

//------------------------------------WOOCOMMERCE ---------------------------------//
//unhook WC wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//hook
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

//------------------------------------WOOCOMMERCE ---------------------------------//

?>