<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<nav class="navigation-desktop">

    <div class="logo-desktop">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <h2><a class="logo-desktop__link" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
        <?php endif; ?>
    </div>

    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'navigation-menu-desktop',
        'container' => false,
        'walker' => new evban_Menu_Walker()
    ));  ?>

</nav>