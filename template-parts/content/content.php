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
        <?php
        the_content(sprintf(
            wp_kses(
                __('Leer más<span> "%s"</span>', 'evban'),
                array('span' => array('class' => array()))
            ),
            get_the_title()
        ));
        ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->