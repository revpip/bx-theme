<?php
/**
 * Business X-Ray Framework theme bootstrap.
 */

defined('ABSPATH') || exit;

add_action('after_setup_theme', static function (): void {
    load_theme_textdomain('business-xray-framework', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor.css');
});

add_action('wp_enqueue_scripts', static function (): void {
    wp_enqueue_style(
        'business-xray-framework',
        get_template_directory_uri() . '/assets/css/theme.css',
        [],
        wp_get_theme()->get('Version')
    );
});
