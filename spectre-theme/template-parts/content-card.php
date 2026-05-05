<article id='post-<?php the_ID(); ?>' <?php post_class('overflow-hidden rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) shadow-sm transition-shadow hover:shadow-md'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href='<?php echo esc_url(get_permalink()); ?>' class='block'>
            <?php the_post_thumbnail('large', array('class' => 'h-56 w-full object-cover')); ?>
        </a>
    <?php endif; ?>

    <div class='space-y-4 p-6'>
        <div class='text-sm text-(--sp-text-on-page-subtle)'>
            <time datetime='<?php echo esc_attr(get_the_date('c')); ?>'><?php echo esc_html(get_the_date()); ?></time>
            <span class='mx-2'>&bull;</span>
            <span><?php echo esc_html(get_the_author()); ?></span>
        </div>

        <h2 class='text-2xl font-semibold tracking-tight text-(--sp-text-on-page-default)'>
            <a href='<?php echo esc_url(get_permalink()); ?>' class='transition-colors hover:text-(--sp-text-on-page-brand)'>
                <?php the_title(); ?>
            </a>
        </h2>

        <div class='prose max-w-none text-(--sp-text-on-page-muted)'>
            <?php the_excerpt(); ?>
        </div>

        <sp-button variant="ghost" onclick="window.location='<?php echo esc_url(get_permalink()); ?>'">
            <?php esc_html_e('Read more', 'spectre-wordpress-themes'); ?>
        </sp-button>
    </div>
</article>
