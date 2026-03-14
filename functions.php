<?php 

function ds_theme_assets() {
   wp_enqueue_style(
    'ds-style',
    get_stylesheet_uri(),
    array(),
    '1.0',
    'all'
);
   wp_enqueue_script(
    'ds-script',
    get_template_directory_uri(),
    array(),
    '1.0',
    'all'
   );
}

add_action('wp_enqueue_scripts','ds-theme-assets');

?>