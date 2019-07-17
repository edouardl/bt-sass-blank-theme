<article <?php post_class(array('entry')); ?> id="post-<?php the_ID(); ?>" role="article">
    <h3 class="entry-title">
        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <section class="entry-content">
        <?php the_excerpt(); ?>
    </section>
    <a href="<?php the_permalink(); ?>" class="read-more">
        <?php _e('Read more', I18N_DOMAIN); ?>
    </a>
</article>
