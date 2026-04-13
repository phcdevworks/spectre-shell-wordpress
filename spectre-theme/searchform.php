<form role="search" method="get" class="flex flex-col gap-3 sm:flex-row" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="spectre-search-field"><?php esc_html_e('Search for:', 'spectre-wordpress-themes'); ?></label>
    <input
        id="spectre-search-field"
        type="search"
        class="min-w-0 flex-1 rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-200"
        placeholder="<?php echo esc_attr_x('Search the site', 'placeholder', 'spectre-wordpress-themes'); ?>"
        value="<?php echo esc_attr(get_search_query()); ?>"
        name="s"
    />
    <button
        type="submit"
        class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 font-medium text-white transition hover:bg-slate-700"
    >
        <?php esc_html_e('Search', 'spectre-wordpress-themes'); ?>
    </button>
</form>
