<?php
/**
 * Elementor Compatibility File
 *
 * @package Worcester_Dentist_Group
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor compatibility setup
 */
class Worcester_Dentist_Group_Elementor {

    /**
     * Instance
     */
    private static $instance = null;

    /**
     * Get instance
     */
    public static function get_instance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor
     */
    public function __construct() {
        add_action('elementor/preview/enqueue_styles', [$this, 'preview_styles']);
        add_action('elementor/elements/categories_registered', [$this, 'add_elementor_widget_categories']);
        add_action('elementor/frontend/after_register_styles', [$this, 'register_frontend_styles']);
    }

    /**
     * Add preview styles
     */
    public function preview_styles() {
        wp_enqueue_style(
            'worcester-dentist-group-elementor-preview',
            get_template_directory_uri() . '/assets/css/elementor-preview.css',
            [],
            '1.0.0'
        );
    }

    /**
     * Register frontend styles
     */
    public function register_frontend_styles() {
        wp_register_style(
            'worcester-dentist-group-elementor-frontend',
            get_template_directory_uri() . '/assets/css/elementor-frontend.css',
            [],
            '1.0.0'
        );
    }

    /**
     * Add Elementor widget categories
     */
    public function add_elementor_widget_categories($elements_manager) {
        $elements_manager->add_category(
            'worcester-dentist-group-elements',
            [
                'title' => __('Worcester Dentist Group Elements', 'worcester-dentist-group'),
                'icon' => 'fa fa-plug',
            ]
        );
    }
}

// Initialize the class
Worcester_Dentist_Group_Elementor::get_instance();
