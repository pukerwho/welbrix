<?php
include('inc/enqueues.php');
// require_once get_template_directory() . '/inc/TGM/example.php';

function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support('woocommerce');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );

require_once get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';
require_once get_template_directory() . '/inc/custom-fields/settings-meta.php';
require_once get_template_directory() . '/inc/custom-fields/product-meta.php';
require_once get_template_directory() . '/inc/welbrix-functions/woocommerce-functions.php';

function welbrix_scripts() {
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/build/css/style.css', false, time() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'all-scripts', get_template_directory_uri() . '/build/js/all.js', '','',true);
};
add_action( 'wp_enqueue_scripts', 'welbrix_scripts' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

register_nav_menus( array(
    'top_header' => 'Верхнее меню',
    'bottom_header' => 'Основное меню',
    'footer_cat' => 'ФУТЕР (Категории)',
    'footer_info' => 'ФУТЕР (Информация)',
    'footer_links' => 'ФУТЕР (Ссылки)',
) );

function editLoginPage() { ?>
  <style type="text/css">
    #login h1 a {
      background-image: url(<?php echo get_template_directory_uri(); ?>/img/icons/logo.svg);
      display: block;
      width: 153px;
      height: 18px;
      background-size: auto;
    }
  </style>
<?php }

add_action('login_enqueue_scripts', 'editLoginPage');

function editLoginPageTitle() {
  return 'Welbrix';
}

add_action('login_headertext', 'editLoginPageTitle');

function editLoginPageTitleUrl() {
  return 'https://welbrix.com.ua';
}

add_action('login_headerurl', 'editLoginPageTitleUrl');