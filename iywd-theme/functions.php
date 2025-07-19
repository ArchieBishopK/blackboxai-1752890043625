<?php
function iywd_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'iywd-theme' ),
        'social'  => __( 'Social Menu', 'iywd-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'iywd_theme_setup' );

function iywd_theme_scripts() {
    wp_enqueue_style( 'iywd-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'iywd_theme_scripts' );

// Customizer settings for logo, colors, header/footer contact info will be added here later.

?>
