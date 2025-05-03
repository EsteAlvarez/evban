<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<!-- If post require password
================================================== -->
<?php
if (post_password_required()) {
    return;
}
?>

<!-- Comments block
================================================== -->
<div id="comments">

    <?php if (have_comments()) : ?>
        <h3>
            <?php
            $comments_number = get_comments_number();
            if (1 === $comments_number) {
                printf(esc_html__('Un comentario en &ldquo;%1$s&rdquo;', 'evban'), get_the_title());
            } else {
                printf(
                    esc_html(
                        _nx(
                            '%1$s comentario en &ldquo;%2$s&rdquo;',
                            '%1$s comentarios en &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'título de comentarios',
                            'evban'
                        )
                    ),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            }
            ?>
        </h3>

        <ul>
            <?php
            wp_list_comments(array(
                'style'      => 'ul',
                'short_ping' => true,
                'avatar_size' => 40,
            ));
            ?>
        </ul>

        <!-- Comments navigation
        ================================================== -->
        <?php the_comments_navigation(); ?>

        <?php if (! comments_open() && get_comments_number()) : ?>
            <p><?php esc_html_e('Los comentarios están cerrados.', 'evban'); ?></p>
        <?php endif; ?>

    <?php endif;
    ?>

    <!-- Comments form
    ================================================== -->
    <?php
    comment_form([
        'fields' => [
            'author' =>
            '<label for="author">' . esc_html__('Nombre', 'evban') . '</label> ' .
                '<input id="author" name="author" type="text" value="" size="30" />',

            'email' =>
            '<label for="email">' . esc_html__('Email', 'evban') . '</label> ' .
                '<input id="email" name="email" type="email" value="" size="30" />',
        ],
        'comment_field' =>
        '<label for="comment">' . esc_html__('Comentario', 'evban') . '</label>' .
            '<textarea id="comment" name="comment" rows="5"></textarea>',
        'title_reply'  => esc_html__('¿Qué opinas?', 'evban'),
        'label_submit' => esc_attr__('Enviar', 'evban'),
    ]);
    ?>

</div>