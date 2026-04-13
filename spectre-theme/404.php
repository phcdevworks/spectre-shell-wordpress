<?php get_header(); ?>

<main class='container mx-auto px-4 py-16'>
    <section class='mx-auto max-w-3xl rounded-3xl border border-slate-200 bg-white p-10 text-center shadow-sm md:p-14'>
        <p class='text-sm font-medium uppercase tracking-[0.2em] text-sky-700'>404</p>
        <h1 class='mt-4 text-5xl font-semibold tracking-tight text-slate-900'><?php esc_html_e('Page not found', 'spectre-wordpress-themes'); ?></h1>
        <p class='mt-4 text-lg text-slate-600'><?php esc_html_e('The page you requested could not be found. Try searching or head back to the homepage.', 'spectre-wordpress-themes'); ?></p>

        <div class='mx-auto mt-8 max-w-xl'>
            <?php get_search_form(); ?>
        </div>

        <p class='mt-8'>
            <a href='<?php echo esc_url(home_url('/')); ?>' class='inline-flex items-center rounded-full bg-sky-700 px-6 py-3 font-medium text-white transition-colors hover:bg-sky-800'>
                <?php esc_html_e('Back to home', 'spectre-wordpress-themes'); ?>
            </a>
        </p>
    </section>
</main>

<?php get_footer(); ?>
