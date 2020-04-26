<?php
function your_child_theme_styles() {
    wp_enqueue_style( 'main_css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'your_child_theme_styles', 10000);