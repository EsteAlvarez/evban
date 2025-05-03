<?php

function theme_script_functions()
{
    if (!is_admin()) {
        wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
    }
}

add_action('wp_enqueue_scripts', 'theme_script_functions', 999);
