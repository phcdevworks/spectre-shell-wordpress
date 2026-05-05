<article id='post-<?php the_ID(); ?>' <?php post_class('rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-(--sp-space-32) shadow-sm md:p-(--sp-space-40)'); ?>>
    <header class='mb-(--sp-space-32) space-y-(--sp-space-16)'>
        <div class='text-sm text-(--sp-text-on-page-subtle)'>
            <time datetime='<?php echo esc_attr(get_the_date('c')); ?>'><?php echo esc_html(get_the_date()); ?></time>
            <span class='mx-(--sp-space-8)'>&bull;</span>
            <span><?php echo esc_html(get_the_author()); ?></span>
        </div>

        <h1 class='text-4xl font-semibold tracking-tight text-(--sp-text-on-page-default)'><?php the_title(); ?></h1>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class='mb-(--sp-space-32) overflow-hidden rounded-2xl'>
            <?php the_post_thumbnail('full', array('class' => 'h-auto w-full object-cover')); ?>
        </div>
    <?php endif; ?>

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
