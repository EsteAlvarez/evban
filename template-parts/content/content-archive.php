<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <?php if (has_post_thumbnail()) : ?>
            <div>
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(null, 'thumbnail', array('alt' => get_the_title())); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php
                echo '<span>' . get_the_date('j F Y') . '</span>';
                echo '<span> by <a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author() . '</a></span>';
                ?>
            </div>
        <?php endif; ?>
    </header>

    <div>
        <?php the_excerpt(); ?>
    </div>

    <footer>
        <?php
        echo '<a href="' . get_permalink() . '">' . __('Leer más', 'evban') . '</a>';
        ?>
    </footer>

</article><!-- #post-<?php the_ID(); ?> -->