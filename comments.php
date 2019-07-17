<?php
// Almost the same version as in twenty seventeen theme

if (post_password_required()):
    return;
endif;
?>
<div id="comments" class="comments-area">

    <?php // Start editing here ?>
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ('1' === $comments_number):
                printf(_x('One Reply to &ldquo;%s&rdquo;', 'comments title', I18N_DOMAIN), get_the_title());
            else:
                printf(
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        I18N_DOMAIN
                    ),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            endif;
            ?>
        </h2>
        <ol class="commentlist">
            <?php wp_list_comments(array('style' => 'ol')); ?>
        </ol><!-- .commentlist -->

        <?php the_comments_pagination(array(
            'prev_text' => '<span class="screen-reader-text">' . __('Previous', I18N_DOMAIN) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __('Next', I18N_DOMAIN) . '</span>',
        ));
        ?>

        <?php if ( ! comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
            <p class="no-comments">
                <?php _e('Comments are closed.', I18N_DOMAIN); ?>
            </p>
        <?php endif; ?>

    <?php endif; ?>
    <?php comment_form(); ?>
</div>
