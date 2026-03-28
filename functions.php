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

function ds_add_bootstrap_cdn() {
    wp_enqueue_style(
        'bootsrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '4.6.2',
        'all'
    );

    wp_enqueue_script(
        'bootsrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '4.6.2',
        true
    );
}

add_action('wp_enqueue_scripts','ds_add_bootstrap_cdn')

?>