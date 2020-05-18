<?php

// MENU
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

//HEADER customized
$args = array(
  'flex-width'    => true,
  'header-text'   => true,
  'width'         => 1024,
  'flex-height'   => true,
  'height'        => 300,
  'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

//LOGO custom
add_theme_support( 'custom-logo' );





//THUMBNAIL IMAGES POST
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

//SIDEBAR
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

//WOOCOMMERCE
//unhook WC wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//customised hook
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

?>