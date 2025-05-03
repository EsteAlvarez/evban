<?php

function evban_breadcrumbs()
{
    $separator = apply_filters('evban_breadcrumbs_separator', ' / ');
    $home_label = esc_html__('Inicio', 'evban');

    if (!is_home() && !is_front_page()) {
        echo '<nav class="breadcrumbs" aria-label="breadcrumbs">';
        echo '<a class="breadcrumbs__home" href="' . esc_url(home_url()) . '">' . $home_label . '</a>' . $separator;

        if (is_category() || is_tag() || is_tax()) {
            $term = get_queried_object();
            echo '<span class="breadcrumbs__current">' . esc_html($term->name) . '</span>';
        } elseif (is_year()) {
            echo '<span class="breadcrumbs__current">' . get_the_date('Y') . '</span>';
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_date('Y')) . '">' . get_the_date('Y') . '</a>' . $separator;
            echo '<span class="breadcrumbs__current">' . get_the_date('F') . '</span>';
        } elseif (is_single()) {
            $category = get_the_category();
            if (!empty($category)) {
                $category_link = esc_url(get_category_link($category[0]->term_id));
                echo '<a href="' . $category_link . '">' . esc_html($category[0]->name) . '</a>' . $separator;
            }
            echo '<span class="breadcrumbs__current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_page()) {
            $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
            foreach ($ancestors as $ancestor) {
                echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>' . $separator;
            }
            echo '<span class="breadcrumbs__current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_search()) {
            printf('<span class="breadcrumbs__current">' . esc_html__('Resultados de búsqueda para: %s', 'evban') . '</span>', esc_html(get_search_query()));
        } elseif (is_404()) {
            echo '<span class="breadcrumbs__current">' . esc_html__('Página no encontrada', 'evban') . '</span>';
        } elseif (is_author()) {
            $author = get_queried_object();
            echo '<span class="breadcrumbs__current">' . esc_html__('Autor: ', 'evban') . esc_html($author->display_name) . '</span>';
        }

        echo '</nav>';
    }
}
