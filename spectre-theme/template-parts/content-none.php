<section class='rounded-2xl border border-dashed border-slate-300 bg-white p-10 text-center shadow-sm'>
    <h2 class='text-3xl font-semibold tracking-tight text-slate-900'><?php esc_html_e('Nothing found', 'spectre-wordpress-themes'); ?></h2>
    <p class='mt-4 text-slate-600'><?php esc_html_e('There is no content matching this request yet.', 'spectre-wordpress-themes'); ?></p>

    <?php if (is_search()) : ?>
        <div class='mx-auto mt-6 max-w-xl'>
            <?php get_search_form(); ?>
        </div>
    <?php endif; ?>
</section>
