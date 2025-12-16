<?php
// Theme setup
function pulse_demo_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'pulsedemo'),
    ]);
}
add_action('after_setup_theme', 'pulse_demo_theme_setup');

// Enqueue styles/scripts
function pulse_demo_theme_assets() {
    wp_enqueue_style('pulse-demo-style', get_stylesheet_uri(), [], '1.0');
    wp_enqueue_script(
        'pulse-demo-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'pulse_demo_theme_assets');

// Example ACF options (optional – if ACF active)
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'pulse-theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}
