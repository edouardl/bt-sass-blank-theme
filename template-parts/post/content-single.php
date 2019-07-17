<article <?php post_class(array('entry')); ?> id="post-<?php the_ID(); ?>" role="article">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php the_tags(); ?>
    <section class="entry-content">
        <?php
        // Content example for CSS adjustments - Uncomment it if you need
        //get_template_part( 'template-parts/post/content', 'example' );
        the_content();
        ?>
    </section>
    <?php comments_template(); ?>
</article>
