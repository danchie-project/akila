<?php
function setup_about_page_template() {
    // Check if the "About" page exists
    $about_page = get_page_by_path('about');

    // If the "About" page does not exist, create it
    if (!$about_page) {
        $about_page_id = wp_insert_post([
            'post_title'   => 'About',
            'post_content' => 'This is the About page content. Update this content as needed.',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ]);
    } else {
        $about_page_id = $about_page->ID;
    }

    // Assign the custom template to the "About" page
    if ($about_page_id) {
        update_post_meta($about_page_id, '_wp_page_template', 'about.php');
    }
}
add_action('after_setup_theme', 'setup_about_page_template');
function my_theme_enqueue_styles()
{
    wp_enqueue_style('my-main-style', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('my-global-style', get_template_directory_uri() . '/css/global.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
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
add_filter('show_admin_bar', '__return_false');
