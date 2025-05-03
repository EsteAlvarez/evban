<?php

/**
 * @package evban
 * @version 1.0.1
 */

get_header(); ?>

<main>
    <?php if (have_posts()) : ?>

        <header>

            <!-- Archive title
            ================================================== -->
            <h1>
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_post();
                    echo 'Autor: ' . get_the_author();
                    rewind_posts();
                } elseif (is_day()) {
                    echo 'Día: ' . get_the_date();
                } elseif (is_month()) {
                    echo 'Mes: ' . get_the_date('F Y');
                } elseif (is_year()) {
                    echo 'Año: ' . get_the_date('Y');
                } else {
                    echo 'Todas las publicaciones';
                }
                ?>
            </h1>
            <?php
            if (is_author()) {
                echo '<div class="author-bio">';
                echo '<p>' . get_the_author_meta('description') . '</p>';
                echo '</div>';
            }
            ?>
        </header>

        <!-- Content loop
    ================================================== -->
    <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content/content', get_post_type());

        endwhile;

        /* Navigation for posts
        ================================================== */
        the_posts_navigation();

    else :

        /* Template in case no content is found
        ================================================== */
        get_template_part('template-parts/content/content', 'none');

    endif;
    ?>
</main>

<?php get_footer(); ?>