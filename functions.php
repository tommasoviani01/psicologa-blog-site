<?php
// Setup del tema
function tommypress_setup() {
   // Con questo comando facciamo gestire <title> a WordPress
   add_theme_support( 'title-tag' );


   // Thumbnail per i post
   add_theme_support( 'post-thumbnails' );


   // Menu di navigazione
   register_nav_menus( array(
       'primary' => __( 'Menu principale', 'tommypress' ),
   ) );


   // Sidebar principale
   register_sidebar( array(
       'name'          => __( 'Sidebar principale', 'tommypress' ),
       'id'            => 'sidebar-1',
       'description'   => __( 'Widget mostrati nella sidebar a destra.', 'tommypress' ),
       'before_widget' => '<section class="sidebar-section widget %2$s">',
       'after_widget'  => '</section>',
       'before_title'  => '<h3 class="widget-title">',
       'after_title'   => '</h3>',
   ) );
}


add_action( 'after_setup_theme', 'tommypress_setup' );


// Caricamento CSS del tema
function tommypress_assets() {
   wp_enqueue_style(
       'tommypress-style',
       get_stylesheet_uri(), // style.css
       array(),
       '1.0'
   );
}
add_action( 'wp_enqueue_scripts', 'tommypress_assets' );