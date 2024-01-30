<?php
function planty_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),array( 'main' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'planty_styles');
