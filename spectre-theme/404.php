<?php get_header(); ?>

<main class='spectre-site-container spectre-main spectre-main--spacious'>
    <section class='spectre-panel spectre-panel--roomy spectre-panel--centered'>
        <p class='spectre-eyebrow'>404</p>
        <h1 class='spectre-title-2xl'><?php esc_html_e('Page not found', 'spectre-wordpress-themes'); ?></h1>
        <p class='spectre-muted'><?php esc_html_e('The page you requested could not be found. Try searching or head back to the homepage.', 'spectre-wordpress-themes'); ?></p>

        <div class='spectre-search-region spectre-search-region--large'>
            <?php get_search_form(); ?>
        </div>

        <p>
            <sp-button variant="primary" onclick="window.location='<?php echo esc_url(home_url('/')); ?>'">
                <?php esc_html_e('Back to home', 'spectre-wordpress-themes'); ?>
            </sp-button>
        </p>
    </section>
</main>

<?php get_footer(); ?>
