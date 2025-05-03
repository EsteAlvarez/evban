<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<!-- Sidebar menu widget
================================================== -->
<aside id="sidebar">
    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</aside>