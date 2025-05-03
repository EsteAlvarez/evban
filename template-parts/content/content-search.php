<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
    </header>

    <div>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>"><?php esc_html_e('Leer más', 'evban'); ?></a>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->