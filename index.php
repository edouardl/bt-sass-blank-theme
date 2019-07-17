<?php get_header(); ?>
<section class="entry-section">

    <?php
    if (have_posts()):
        // Start the loop
        while (have_posts()): the_post();
            // Load loop content block template
            get_template_part('template-parts/post/content', 'loop');

            // End the loop
        endwhile;

    else:
        _e('No content found', I18N_DOMAIN);

    endif;
    ?>

</section>
<?php get_footer(); ?>
