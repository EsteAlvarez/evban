<?php

/**
 * evban functions and definitions
 *
 * @package evban
 * @since evban 1.0.1
 */

if (! isset($content_width)) {
    $content_width = 800; /* px */
}

if (! function_exists('evban_setup')) :

    function evban_setup()
    {

        /* Availability for translations
        ================================================== */
        load_theme_textdomain('evban', get_template_directory() . '/languages');


        /* Default RSS feed links for posts and comments in the <head> section
        ================================================== */
        add_theme_support('automatic-feed-links');


        /* Enable support for post thumbnails and featured images
        ================================================== */
        add_theme_support('post-thumbnails');


        /* Allow WordPress to manage the document title. By adding theme support, we declare that this theme does not use a <title> tag hardcoded in the document header, and expect WordPress to provide it for us.
        ================================================== */
        add_theme_support('title-tag');


        /* Add support for excerpts in pages
        ================================================== */
        add_post_type_support('page', 'excerpt');


        /* Support for wp_nav_menu() function
        ================================================== */
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary', 'evban')
            )
        );


        /* Change the default core markup for the search form, comment form, and comments to generate valid HTML5.
        ================================================== */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );


        /* Enable support for the following post formats: aside, gallery, quote, image, and video.
        ================================================== */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));


        /* Configure the core WordPress custom background feature.
        ================================================== */
        add_theme_support('custom-background', [
            'default-color'          => 'ffffff',
            'default-image'          => '',
            'wp-head-callback'       => '_custom_background_cb',
            'default-repeat'         => 'no-repeat',
            'default-position-x'     => 'center',
            'default-size'           => 'cover',
        ]);


        /* Support for basic block styles
        ================================================== */
        // add_theme_support('wp-block-styles');


        /* Support for responsive embeds
        ================================================== */
        add_theme_support('responsive-embeds');


        /* Support for wide alignment (align-wide) in blocks
        ================================================== */
        add_theme_support('align-wide');


        /* Add support for selective refresh of widgets in the Customizer.
        ================================================== */
        // add_theme_support('customize-selective-refresh-widgets');


        /* Add support for a custom logo
        ================================================== */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );


        /* Add support for a custom header
        ================================================== */
        add_theme_support('custom-header', array(
            // 'default-image'          => get_template_directory_uri() . '/assets/img/default-header.jpg',
            'width'                  => 1920,
            'height'                 => 60,
            'flex-height'            => true,
            'flex-width'             => true,
            'header-text'            => false,
            'default-text-color'     => '111111',
        ));
    }
endif;
add_action('after_setup_theme', 'evban_setup');


/* Sidebar
================================================== */
function evban_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'evban'),
            'id'            => 'sidebar',
            'description'   => esc_html__('Añadir widgets aquí.', 'evban'),
            'before_widget' => '<div id="%1$s" class="widgets-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-sidebar-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'evban_widgets_init');


/* Comments reply
================================================== */
function evban_enqueue_comment_reply_script()
{
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'evban_enqueue_comment_reply_script');


/* Navigation scripts template-parts/layout/header-content
================================================== */
function navigation_scripts()
{
    wp_enqueue_script('navigation-scripts', get_template_directory_uri() . '/template-parts/layout/header-content/header-content.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'navigation_scripts');


/* Navigation styles template-parts/layout/header-content
================================================== */
function navigation_styles()
{
    wp_enqueue_style('navigation-styles', get_template_directory_uri() . '/template-parts/layout/header-content/header-content.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'navigation_styles');


/* Assets
================================================== */
if (file_exists(get_template_directory() . '/assets/assets.php')) {
    include get_template_directory() . '/assets/assets.php';
}
