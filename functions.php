<?php
// Load constants first
include('inc/constants.php');

// Include your functions files here
include('inc/enqueues.php');
include('inc/excerpt.php');

/**
 * Don't hesitate to use the WP code snippet generator Hasty : https://www.wp-hasty.com/
 */

/**
 * Declare theme support
 * ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
 */
function theme_set_theme_supports()
{
    global $wp_version;

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    add_theme_support('automatic-feed-links');

    // let wordpress manage the title
    add_theme_support('title-tag');

    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
}

add_action('after_setup_theme', 'theme_set_theme_supports');


/**
 * Declare theme width global var
 */
if ( ! isset($content_width)) {
    // @TODO : edit the value for your own specifications
    $content_width = 1170; // Bootstrap default container value
}


/**
 * Register WordPress menus
 * cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 */
//@TODO : declare your menus here
register_nav_menus(array(
    'main_menu' => __('Main menu', I18N_DOMAIN)
));


/**
 * register sidebars
 * cf : https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @return void
 */
function theme_register_sidebars()
{
    if ( ! function_exists('register_sidebar')) {
        return;
    }
    //@TODO : declare your sidebar here
    register_sidebar(array(
        'name'          => __('Main sidebar', I18N_DOMAIN),
        'id'            => 'main-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

//add_action( 'widgets_init', 'theme_register_sidebars' ); //@TODO : uncomment if you're need sidebar(s)


/**
 * Set style.css as style in admin editor
 *
 */
function theme_set_editor_style()
{
    add_editor_style(get_stylesheet_directory_uri() . '/dist/css/theme.css');
}

//add_action( 'admin_init', 'theme_set_editor_style' ); //@TODO : Uncomment if you use it

/**
 * Remove emojis CSS and JS
 */
function theme_remove_emojis()
{
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 99);
}
//add_action( 'init', 'theme_remove_emojis' ); //@TODO: Uncomment if you don't need emojis and want to optimize your site
