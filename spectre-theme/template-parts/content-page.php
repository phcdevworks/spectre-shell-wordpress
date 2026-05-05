<article id='post-<?php the_ID(); ?>' <?php post_class('rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-8 shadow-sm md:p-10'); ?>>
    <header class='mb-8 space-y-3'>
        <h1 class='text-4xl font-semibold tracking-tight text-(--sp-text-on-page-default)'><?php the_title(); ?></h1>
    </header>

    <div class='prose prose-slate max-w-none'>
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<nav class="mt-8 text-sm font-medium text-(--sp-text-on-page-muted)">' . esc_html__('Pages:', 'spectre-wordpress-themes') . ' ',
            'after' => '</nav>',
        ));
        ?>
    </div>
</article>
