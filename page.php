<?php

/**
 * @package evban
 * @version 1.0.1
 */

get_header(); ?>

<main>

    <!-- Content loop
    ================================================== -->
    <?php while (have_posts()) : the_post(); ?>

        <!-- if(is_page('slug-de-la-pagina')) {
            get_template_part('template-parts/content/content', 'slug-page');
        } -->

        <?php get_template_part('template-parts/content/content', 'page'); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>