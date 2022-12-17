<?php

// Load CSS
wp_enqueue_style( 'style', get_stylesheet_uri() );

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Main Menu'
    )
);
