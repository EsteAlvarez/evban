<?php

function theme_styles_functions()
{
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'theme_styles_functions');
