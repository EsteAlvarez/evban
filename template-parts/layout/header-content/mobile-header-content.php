<?php

/**
 * @package evban
 * @version 1.0.0
 */
?>

<nav class="navigation-mobile">

    <div class="navigation-mobile__logo-toggle">
        <button
            id="menu-toggle-mobile"
            class="menu-toggle-button"
            aria-label="<?php esc_attr_e('Abrir menú de navegación móvil', 'evban'); ?>"
            aria-controls="navegacion_mobile"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                <path fill="#d1d1d1" d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8m0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8m0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8" />
            </svg>
        </button>

        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <h2><a class="container-logo__link" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
        <?php endif; ?>
    </div>

    <!-- Menú off-canvas
    ================================================== -->
    <div class="mobile-offcanvas">
        <div class="close-offcanvas-button" id="offcanvas_close_button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                <path fill="#d1d1d1" fill-rule="evenodd" d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.1.1 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.12.12 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.1.1 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926L224.297 857.629c-.04.041-.06.052-.083.059a.12.12 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.1.1 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512L166.371 224.297c-.041-.04-.052-.06-.059-.083a.12.12 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.1.1 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.12.12 0 0 1 .07 0Z" />
            </svg>
        </div>

        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'navigation-menu-mobile',
            'container' => false,
            'walker' => new evban_Menu_Walker()
        )); ?>
    </div>

</nav>