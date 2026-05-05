<?php get_header(); ?>

<main class='container mx-auto px-(--sp-layout-container-padding-inline-sm) md:px-(--sp-layout-container-padding-inline-md) py-(--sp-space-64)'>
    <section class='mx-auto max-w-3xl rounded-3xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-(--sp-space-40) text-center shadow-sm md:p-(--sp-space-56)'>
        <p class='text-sm font-medium uppercase tracking-[0.2em] text-(--sp-text-on-page-brand)'>404</p>
        <h1 class='mt-(--sp-space-16) text-5xl font-semibold tracking-tight text-(--sp-text-on-page-default)'><?php esc_html_e('Page not found', 'spectre-wordpress-themes'); ?></h1>
        <p class='mt-(--sp-space-16) text-lg text-(--sp-text-on-page-muted)'><?php esc_html_e('The page you requested could not be found. Try searching or head back to the homepage.', 'spectre-wordpress-themes'); ?></p>

        <div class='mx-auto mt-(--sp-space-32) max-w-xl'>
            <?php get_search_form(); ?>
        </div>

        <p class='mt-(--sp-space-32)'>
            <sp-button variant="primary" onclick="window.location='<?php echo esc_url(home_url('/')); ?>'">
                <?php esc_html_e('Back to home', 'spectre-wordpress-themes'); ?>
            </sp-button>
        </p>
    </section>
</main>

<?php get_footer(); ?>
