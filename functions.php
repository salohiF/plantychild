<?php
function planty_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),array( 'main' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'planty_styles');

add_filter('wp_nav_menu_items', 'add_admin_link_at_the_end_of_menu', 10, 2);

 function add_admin_link_at_the_end_of_menu($items, $args){
    //Vérifier si user connecté et si c'est le bon menu
     if( is_user_logged_in() && $args->theme_location == 'main-menu' ){

      $items .= '<li><a title="Admin" href="'. esc_url( admin_url() ) .'"><span class="nav-link">' . __( 'Admin' ) . '</span></a></li>';   
   
     }
     
     return $items;
 }