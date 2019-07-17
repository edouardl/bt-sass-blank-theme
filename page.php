<?php get_header(); ?>
<section class="entry-section">

    <?php
    if (have_posts()): the_post();
        // Load default block template page
        get_template_part('template-parts/page/content', 'default');

    endif;
    ?>

    <?php wp_link_pages(); ?>
</section>
<?php get_footer(); ?>
