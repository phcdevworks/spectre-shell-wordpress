<section class='rounded-2xl border border-dashed border-slate-300 bg-white p-10 text-center shadow-sm'>
    <?php if (is_search()) : ?>
        <h2 class='text-3xl font-semibold tracking-tight text-slate-900'><?php esc_html_e('No search results', 'spectre-wordpress-themes'); ?></h2>
        <p class='mt-4 text-slate-600'><?php esc_html_e('Try a different search term or browse the site navigation.', 'spectre-wordpress-themes'); ?></p>
    <?php elseif (is_home()) : ?>
        <h2 class='text-3xl font-semibold tracking-tight text-slate-900'><?php esc_html_e('No posts published yet', 'spectre-wordpress-themes'); ?></h2>
        <p class='mt-4 text-slate-600'><?php esc_html_e('Publish your first post to populate the journal feed.', 'spectre-wordpress-themes'); ?></p>
    <?php else : ?>
        <h2 class='text-3xl font-semibold tracking-tight text-slate-900'><?php esc_html_e('Nothing found', 'spectre-wordpress-themes'); ?></h2>
        <p class='mt-4 text-slate-600'><?php esc_html_e('There is no content matching this request yet.', 'spectre-wordpress-themes'); ?></p>
    <?php endif; ?>

    <div class='mx-auto mt-6 max-w-xl'>
        <?php get_search_form(); ?>
    </div>
</section>
