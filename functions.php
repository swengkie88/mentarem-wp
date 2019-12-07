<?php
// load script
function load_file(){
    wp_enqueue_style('style', get_stylesheet_uri() );
}

// Buat load css
add_action('wp_enqueue_scripts', 'load_file');

// Add theme support for Custom Logo.
add_theme_support(
    'custom-logo',
    array(
        'width'      => 250,
        'height'     => 250,
        'flex-width' => true,
    )
);

register_nav_menus(array(
    'main_menu' => 'Menu Utama',
    'footer_menu' => 'Menu Footer'
))
?>