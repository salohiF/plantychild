<?php
function planty_styles() {
wp_enqueue_style( 'child-style', get_stylesheet_uri(),array( 'planty-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'planty_styles');
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );