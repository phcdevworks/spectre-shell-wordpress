<?php
/**
 * Theme Functions - Vite WordPress Template
 *
 * IMPORTANT: This is a template file. You should:
 * 1. Replace 'spectre_shell' with your theme slug throughout this file
 * 2. Replace function prefixes (e.g., spectre_shell_setup -> yourtheme_setup)
 * 3. Update text domain in translation functions
 */

if (!defined('ABSPATH')) exit;

// Theme setup
function spectre_shell_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'spectre-theme'),
    ));
}
add_action('after_setup_theme', 'spectre_shell_setup');

// Enqueue Vite assets
function spectre_shell_enqueue_assets() {
    $is_dev = function_exists('wp_get_environment_type')
        ? wp_get_environment_type() === 'development'
        : (defined('WP_ENV') && WP_ENV === 'development');
    $vite_server = defined('VITE_DEV_SERVER') ? rtrim(VITE_DEV_SERVER, '/') : 'http://localhost:5173';

    if ($is_dev) {
        // Development mode - load from Vite dev server
        wp_enqueue_script(
            'vite-client',
            $vite_server . '/@vite/client',
            array(),
            null,
            false
        );
        wp_script_add_data('vite-client', 'type', 'module');

        wp_enqueue_script(
            'spectre-theme-main',
            $vite_server . '/src/js/main.ts',
            array('vite-client'),
            null,
            true
        );
        wp_script_add_data('spectre-theme-main', 'type', 'module');
    } else {
        // Production mode - load built assets with manifest
        $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
        if (!file_exists($manifest_path)) {
            if (defined('WP_DEBUG') && WP_DEBUG) {
                error_log('Vite manifest not found: ' . $manifest_path);
            }
            return;
        }

        $manifest = json_decode(file_get_contents($manifest_path), true);

        // Enqueue CSS
        if (isset($manifest['src/styles/main.css'])) {
            $css_file = $manifest['src/styles/main.css']['file'];
            wp_enqueue_style(
                'spectre-theme-style',
                    get_template_directory_uri() . '/dist/' . $css_file,
                array(),
                null
            );
        }

        // Enqueue JS
        if (isset($manifest['src/js/main.ts'])) {
            $js_file = $manifest['src/js/main.ts']['file'];
            wp_enqueue_script(
                'spectre-theme-main',
                    get_template_directory_uri() . '/dist/' . $js_file,
                array(),
                null,
                true
            );
            wp_script_add_data('spectre-theme-main', 'type', 'module');
        }
    }
}
add_action('wp_enqueue_scripts', 'spectre_shell_enqueue_assets');
