<?php
/**
 * Worcester Dentist Group functions and definitions
 *
 * @package Worcester_Dentist_Group
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

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

// Add Elementor support
function worcester_dentist_group_elementor_support() {
    // Add support for Elementor page builder
    add_theme_support('elementor');
    
    // Add support for Elementor Pro header and footer
    add_theme_support('elementor-pro-header-footer');
}
add_action('after_setup_theme', 'worcester_dentist_group_elementor_support');

// Add custom widget locations
function worcester_dentist_group_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'worcester-dentist-group'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'worcester-dentist-group'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'worcester-dentist-group'),
        'id'            => 'footer-widget-area',
        'description'   => esc_html__('Add footer widgets here.', 'worcester-dentist-group'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'worcester_dentist_group_widgets_init');

// Add custom image sizes
add_image_size('worcester-dentist-group-featured', 1200, 600, true);
add_image_size('worcester-dentist-group-thumbnail', 350, 250, true);

// Add custom Elementor widgets location
function worcester_dentist_group_elementor_widgets($widgets_manager) {
    // Include widget files here if needed
}
add_action('elementor/widgets/register', 'worcester_dentist_group_elementor_widgets');

// Add custom Elementor categories
function worcester_dentist_group_elementor_categories($elements_manager) {
    $elements_manager->add_category(
        'worcester-dentist-group',
        [
            'title' => esc_html__('Worcester Dentist Group', 'worcester-dentist-group'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'worcester_dentist_group_elementor_categories');
