<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<?php get_header(); ?>

<main>

    <section>
        <header>
            <h1>
                <?php _e('¡Vaya! No se pudo encontrar esa página.', 'evban'); ?>
            </h1>
        </header>

        <div>
            <p>
                <?php _e('Parece que no se encontró nada en esta ubicación. Prueba con la barra de búsqueda o explora nuestras secciones.', 'evban'); ?>
            </p>

            <!-- Searchform
            ================================================== -->
            <?php get_search_form(); ?>

            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php _e('Volver al inicio', 'evban'); ?>">
                    <?php _e('Volver al inicio', 'evban'); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>