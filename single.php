<?php

/**
 * @package evban
 * @version 1.0.1
 */

get_header(); ?>

<main>

    <!-- Breadcrumbs
    ================================================== -->
    <?php if (function_exists('evban_breadcrumbs')) : ?>
        <?php evban_breadcrumbs(); ?>
    <?php endif; ?>

    <!-- Content loop
    ================================================== -->
    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

            get_template_part('template-parts/content/content', get_post_type());

            /* Navigation for posts
            ================================================== */
            the_post_navigation();

        endwhile;

    else :

        /* Template in case no content is found
        ================================================== */
        get_template_part('template-parts/content/content', 'none');

    endif;
    ?>

    <!-- Comments section
    ================================================== -->
    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>

</main>

<?php get_footer(); ?>