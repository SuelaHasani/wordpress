<?php

function ds_theme_assets() {

    // Main stylesheet
    wp_enqueue_style(
        'ds-style',
        get_stylesheet_uri(),
        array(),
        '1.0',
        'all'
    );

    // Additional CSS example
    wp_enqueue_style(
        'slider-style',
        get_template_directory_uri() . '/css/slider.css',
        array(),
        '1.0',
        'all'
    );

    // Custom JS
    wp_enqueue_script(
        'ds-script',
        get_template_directory_uri() . '/js/custom.js',
        array('jquery'),
        '1.0',
        true
    );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option('thread_comments') ) {
        wp_enqueue_script('comment-reply');
    }
}


add_action('wp_enqueue_scripts', 'ds_theme_assets');


function ds_setup() {

    // Enable menu support
    add_theme_support('menus');

    // Register primary menu
    register_nav_menu('primary', 'Primary Menu');

}

add_action('init', 'ds_setup');

?>