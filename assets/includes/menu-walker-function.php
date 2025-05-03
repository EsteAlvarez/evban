<?php

class evban_Menu_Walker extends Walker_Nav_Menu
{
    // Starts the menu item
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $classes = (array) $item->classes;

        // Custom classes
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'evban-current-page';
        }
        if (in_array('current-menu-ancestor', $classes) || in_array('current-menu-parent', $classes)) {
            $classes[] = 'evban-current-ancestor';
        }
        $classes[] = 'evban-menu-item-level-' . $depth;

        // Filter for custom classes
        $class_names = apply_filters('evban_menu_item_classes', implode(' ', array_filter($classes)), $item, $args, $depth);

        // Start the element
        $output .= '<li class="' . esc_attr($class_names) . '">';

        // Additional attributes
        $attributes = '';
        !empty($item->url) && $attributes .= ' href="' . esc_url($item->url) . '"';
        !empty($item->target) && $attributes .= ' target="' . esc_attr($item->target) . '"';
        !empty($item->xfn) && $attributes .= ' rel="' . esc_attr($item->xfn) . '"';
        !empty($item->title) && $attributes .= ' title="' . esc_attr($item->title) . '"';

        // Accessibility
        if (in_array('current-menu-item', $classes)) {
            $attributes .= ' aria-current="page"';
        }

        // Link text
        $link_text = apply_filters('evban_menu_item_title', esc_html($item->title), $item, $args, $depth);

        $output .= '<a' . $attributes . '>' . $link_text . '</a>';
    }

    // Ends the menu item
    function end_el(&$output, $item, $depth = 0, $args = [])
    {
        $output .= '</li>';
    }

    // Starts the submenu level
    function start_lvl(&$output, $depth = 0, $args = [])
    {
        $class = 'evban-sub-menu evban-sub-menu-level-' . $depth;
        $output .= '<ul class="' . esc_attr($class) . '" role="menu">';
    }

    // Ends the submenu level
    function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}
