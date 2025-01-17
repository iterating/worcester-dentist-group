<?php
/**
 * Worcester Dentist Group functions and definitions
 */

// Theme Setup
function worcester_dentist_group_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'worcester-dentist-group'),
        'footer' => esc_html__('Footer Menu', 'worcester-dentist-group'),
    ));

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'worcester_dentist_group_setup');

// Enqueue scripts and styles
function worcester_dentist_group_scripts() {
    wp_enqueue_style('worcester-dentist-group-style', get_stylesheet_uri());
    wp_enqueue_style('worcester-dentist-group-custom', get_template_directory_uri() . '/assets/css/custom.css');
    
    wp_enqueue_script('worcester-dentist-group-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0', true);
    wp_enqueue_script('worcester-dentist-group-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'worcester_dentist_group_scripts');
