<?php
add_filter('use_widgets_block_editor', '__return_false');

function theme_widgets()
{
    register_sidebar(
        array(
            'name' => 'widget example',
            'id' => 'widget_example',
            'description' => 'Widget de ejmplo',
            'before_widget' => '<div tabindex="0" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init', 'theme_widgets');
