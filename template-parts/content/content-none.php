<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<article>
    <header>
        <h1><?php esc_html_e('No se ha encontrado ninguna entrada', 'evban'); ?></h1>
    </header>

    <div>
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p><?php printf(wp_kses(__('¿Listo para publicar tu primera entrada? <a href="%1$s">Comienza aquí</a>.', 'evban'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>

        <?php elseif (is_search()) : ?>
            <p><?php esc_html_e('Lo sentimos, pero no se encontraron resultados. Intenta nuevamente con diferentes palabras.', 'evban'); ?></p>
            <?php get_search_form(); ?>

        <?php elseif (is_category()) : ?>
            <p><?php printf(esc_html__('No hay entradas en la categoría "%s".', 'evban'), single_cat_title('', false)); ?></p>

        <?php elseif (is_tag()) : ?>
            <p><?php printf(esc_html__('No hay entradas con la etiqueta "%s".', 'evban'), single_tag_title('', false)); ?></p>

        <?php else : ?>
            <p><?php esc_html_e('Parece que no podemos encontrar lo que estás buscando. Tal vez una búsqueda pueda ayudar.', 'evban'); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div>
</article>