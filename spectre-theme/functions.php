<?php
/**
 * Theme functions for Spectre WordPress Themes.
 */

if (!defined("ABSPATH")) exit;

function spectre_wordpress_themes_setup() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("html5", array("search-form", "comment-form", "comment-list", "gallery", "caption"));
    add_theme_support("custom-logo");
    add_theme_support("block-editor-styles");
    add_theme_support("align-wide");
    add_theme_support("editor-color-palette");
    add_theme_support("editor-font-sizes");
    add_theme_support("responsive-embeds");

    register_nav_menus(array(
        "primary" => __("Primary Menu", "spectre-wordpress-themes"),
        "footer"  => __("Footer Menu", "spectre-wordpress-themes"),
    ));
}
add_action("after_setup_theme", "spectre_wordpress_themes_setup");

function spectre_wordpress_themes_widgets_init() {
    register_sidebar(array(
        "name"          => __("Main Sidebar", "spectre-wordpress-themes"),
        "id"            => "sidebar-main",
        "description"   => __("Widgets in this area appear in the sidebar.", "spectre-wordpress-themes"),
        "before_widget" => '<section id="%1$s" class="widget %2$s rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-(--sp-space-24) shadow-sm">',
        "after_widget"  => "</section>",
        "before_title"  => '<h3 class="mb-(--sp-space-16) text-sm font-semibold uppercase tracking-widest text-(--sp-text-on-page-subtle)">',
        "after_title"   => "</h3>",
    ));
}
add_action("widgets_init", "spectre_wordpress_themes_widgets_init");

function spectre_wordpress_themes_primary_menu_fallback($args) {
    if (empty($args["theme_location"]) || "primary" !== $args["theme_location"]) {
        return;
    }

    echo "<div class='text-sm text-(--sp-color-neutral-300)'>";
    wp_page_menu(array(
        "container" => false,
        "menu_class" => "flex flex-wrap items-center gap-(--sp-space-16)",
        "show_home" => true,
    ));
    echo "</div>";
}

function spectre_wordpress_themes_enqueue_assets() {
    $is_dev = function_exists("wp_get_environment_type")
        ? wp_get_environment_type() === "development"
        : (defined("WP_ENV") && WP_ENV === "development");
    $vite_server = defined("VITE_DEV_SERVER") ? rtrim(VITE_DEV_SERVER, "/") : "http://localhost:5173";

    if ($is_dev) {
        // Development mode loads the single theme entry from Vite. CSS arrives through the JS import.
        wp_enqueue_script(
            "vite-client",
            $vite_server . "/@vite/client",
            array(),
            null,
            false
        );
        wp_script_add_data("vite-client", "type", "module");

        wp_enqueue_script(
            "spectre-wordpress-themes-main",
            $vite_server . "/src/js/main.ts",
            array("vite-client"),
            null,
            true
        );
        wp_script_add_data("spectre-wordpress-themes-main", "type", "module");

        return;
    }

    $manifest_path = get_template_directory() . "/dist/.vite/manifest.json";
    if (!file_exists($manifest_path)) {
        if (defined("WP_DEBUG") && WP_DEBUG) {
            error_log("Vite manifest not found: " . $manifest_path);
        }
        return;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);
    if (!is_array($manifest)) {
        if (defined("WP_DEBUG") && WP_DEBUG) {
            error_log("Invalid Vite manifest JSON: " . $manifest_path);
        }
        return;
    }

    $main_entry = $manifest["src/js/main.ts"] ?? null;

    if (!$main_entry || empty($main_entry["file"])) {
        if (defined("WP_DEBUG") && WP_DEBUG) {
            error_log("Main Vite entry not found in manifest: src/js/main.ts");
        }
        return;
    }

    if (!empty($main_entry["css"]) && is_array($main_entry["css"])) {
        wp_enqueue_style(
            "spectre-wordpress-themes-style",
            get_template_directory_uri() . "/dist/" . $main_entry["css"][0],
            array(),
            null
        );
    }

    wp_enqueue_script(
        "spectre-wordpress-themes-main",
        get_template_directory_uri() . "/dist/" . $main_entry["file"],
        array(),
        null,
        true
    );
    wp_script_add_data("spectre-wordpress-themes-main", "type", "module");
}
add_action("wp_enqueue_scripts", "spectre_wordpress_themes_enqueue_assets");

function spectre_wordpress_themes_enqueue_block_editor_assets() {
    $manifest_path = get_template_directory() . "/dist/.vite/manifest.json";
    if (!file_exists($manifest_path)) {
        return;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);
    if (!is_array($manifest)) {
        return;
    }

    $main_entry = $manifest["src/js/main.ts"] ?? null;
    if (!$main_entry || empty($main_entry["css"]) || !is_array($main_entry["css"])) {
        return;
    }

    wp_enqueue_style(
        "spectre-wordpress-themes-editor-style",
        get_template_directory_uri() . "/dist/" . $main_entry["css"][0],
        array(),
        null
    );
}
add_action("enqueue_block_editor_assets", "spectre_wordpress_themes_enqueue_block_editor_assets");

function spectre_wordpress_themes_has_icons() {
    return shortcode_exists("spectre-icon");
}
