<?php

/**
 * @package evban
 * @version 1.0.1
 */

get_header(); ?>

<main>

    <?php if (have_posts()) : ?>

        <header>
            <h1>
                <?php printf(__('Resultados de búsqueda para: %s', 'evban'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
        </header>

        <!-- Content loop
        ================================================== -->
        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content/content', 'search'); ?>

        <?php endwhile; ?>

        <!-- Navigation for posts
        ================================================== -->
        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <!-- Template in case no content is found
        ================================================== -->
        <?php get_template_part('template-parts/content/content', 'none'); ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>