<?php
  function load_theme()
  {
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/main.css');
  }

  add_action( 'wp_enqueue_scripts', 'load_theme' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus(array(
    'main_menu'   => 'Menu Utama',
    'events_menu' => 'Menu Events'
  ));
?>
