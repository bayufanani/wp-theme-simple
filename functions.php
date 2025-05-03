<?php

/**
 * Minimal theme setup
 */
function mytheme_setup()
{
    add_theme_support('title-tag'); // Let WP manage <title>
    add_theme_support('post-thumbnails'); // Enable featured images
}
add_action('after_setup_theme', 'mytheme_setup');

/**
 * Enqueue styles and scripts
 */
function script_and_style()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.5');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.3.5', true);
    wp_enqueue_style('splide', get_template_directory_uri() . '/css/splide.min.css', array(), '4.1.3');
    wp_enqueue_script('splide', get_template_directory_uri() . '/js/splide.min.js', array(), '4.1.3', true);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'script_and_style');
