<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <!-- <link rel="stylesheet" href="../css/style.css" inline> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php
    wp_head();
  ?>
</head>
<body <?php echo body_class(); ?>>
  <header id="header" class="header" role="banner">
    <div class="header_top hidden md:block bg-white">
      <div class="container mx-auto px-4 md:px-0">
        <div class="flex justify-between items-center">
          <div class="header_top_menu">
            <?php wp_nav_menu([
              'theme_location' => 'top_header',
              'container' => 'ul',
              'menu_class' => 'flex',
            ]); ?>  
          </div>
          <div class="flex items-center">
            <div class="flex items-center mr-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/phone-icon.svg" class="mr-2">
              <?php $phones = carbon_get_theme_option('crb_contact_phones');
              foreach (array_slice($phones, 0, 1) as $phone): ?>
                <a href="tel:<?php echo $phone['crb_contact_phone']; ?>"><?php echo $phone['crb_contact_phone']; ?></a>
              <?php endforeach; ?>
            </div>
            <div class="flex items-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/clock-icon.svg" class="mr-2">
              <span><?php _e('Без выходных 24/7', 'welbrix'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container mx-auto px-4 md:px-0">
        <div class="flex justify-between items-center">
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/logo.svg" alt="Лого">
            </a>
          </div>
          <div class="hidden md:flex items-center">
            <div class="header_bottom_menu">
              <?php wp_nav_menu([
                'theme_location' => 'bottom_header',
                'container' => 'ul',
                'menu_class' => 'flex',
              ]); ?> 
            </div>
            <div class="flex items-center">
              <div class="header_bottom_icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/search-icon.svg">  
              </div>
              <div class="header_bottom_icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/fav-icon.svg">
              </div>
              <div class="header_bottom_icon">
                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/profile-icon.svg">
                </a>
              </div>
              <div class="header_bottom_icon cart">
                <a href="<?php echo wc_get_cart_url(); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/cart-icon.svg"> 
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <section id="content" role="main">