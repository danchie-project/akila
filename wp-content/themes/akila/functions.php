<?php


/**
 * Enqueue styles for the theme.
 */
function my_theme_enqueue_styles()
{
    wp_enqueue_style('my-global-style', get_template_directory_uri() . '/css/global.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


/**
 *  Language Switcher HTML (Integrated with Polylang)
 */



function mytheme_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    load_theme_textdomain('mytheme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'mytheme_setup');
