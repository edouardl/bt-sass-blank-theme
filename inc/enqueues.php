<?php
/**
 * Enqueues all css and script used in the theme
 *
 * @return void
 */
function theme_enqueues_styles_scripts()
{

    // Comment reply JS
    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }

    // Popper
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js');

    // Bootstrap : load js part from cdn
    wp_enqueue_script(
        'bootstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        array('jquery', 'popper'),
        '4.1.3',
        true
    );


    // @TODO : Uncomment what you need
    // Animate CSS
    //wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );

    // Font Awesome
    // wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );


    // ENQUEUE your css below

    // ENQUEUE your js below @TODO : uncomment if you added js librairies
    //wp_enqueue_script( 'libs', get_stylesheet_directory_uri() . '/dist/js/libs.js' , array(), '1.0', true);

    // Default theme stylesheet
    wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/dist/css/theme.css');

    // Default js of your theme to add your own js scripts, add dependances if needed
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueues_styles_scripts');
