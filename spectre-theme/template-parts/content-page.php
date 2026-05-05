<article id='post-<?php the_ID(); ?>' <?php post_class('rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-(--sp-space-32) shadow-sm md:p-(--sp-space-40)'); ?>>
    <header class='mb-(--sp-space-32) space-y-(--sp-space-12)'>
        <h1 class='text-4xl font-semibold tracking-tight text-(--sp-text-on-page-default)'><?php the_title(); ?></h1>
    </header>

    <div class='prose prose-slate max-w-none'>
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<nav class="mt-(--sp-space-32) text-sm font-medium text-(--sp-text-on-page-muted)">' . esc_html__('Pages:', 'spectre-wordpress-themes') . ' ',
            'after' => '</nav>',
        ));
        ?>
    </div>
</article>
