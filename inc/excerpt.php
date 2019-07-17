<?php
/**
 * Edit the excerpt more
 *
 * @param string $more
 *
 * @return string
 */
function theme_excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'theme_excerpt_more');
