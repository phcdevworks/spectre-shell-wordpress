<form role="search" method="get" class="flex flex-col gap-(--sp-space-12) sm:flex-row" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="spectre-search-field"><?php esc_html_e('Search for:', 'spectre-wordpress-themes'); ?></label>
    <sp-input
        id="spectre-search-field"
        type="search"
        name="s"
        class="min-w-0 flex-1"
        placeholder="<?php echo esc_attr_x('Search the site', 'placeholder', 'spectre-wordpress-themes'); ?>"
        value="<?php echo esc_attr(get_search_query()); ?>"
    ></sp-input>
    <sp-button type="submit" variant="primary"><?php esc_html_e('Search', 'spectre-wordpress-themes'); ?></sp-button>
</form>
