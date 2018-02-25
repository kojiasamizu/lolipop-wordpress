<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}
//親スタイルシート読み込み
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_image_size( '400_thumbnail', 400, 225, true );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}