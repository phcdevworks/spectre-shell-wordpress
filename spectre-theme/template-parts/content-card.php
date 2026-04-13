<article id='post-<?php the_ID(); ?>' <?php post_class('overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-shadow hover:shadow-md'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href='<?php echo esc_url(get_permalink()); ?>' class='block'>
            <?php the_post_thumbnail('large', array('class' => 'h-56 w-full object-cover')); ?>
        </a>
    <?php endif; ?>

    <div class='space-y-4 p-6'>
        <div class='text-sm text-slate-500'>
            <time datetime='<?php echo esc_attr(get_the_date('c')); ?>'><?php echo esc_html(get_the_date()); ?></time>
            <span class='mx-2'>&bull;</span>
            <span><?php echo esc_html(get_the_author()); ?></span>
        </div>

        <h2 class='text-2xl font-semibold tracking-tight text-slate-900'>
            <a href='<?php echo esc_url(get_permalink()); ?>' class='transition-colors hover:text-sky-700'>
                <?php the_title(); ?>
            </a>
        </h2>

        <div class='prose prose-slate max-w-none text-slate-700'>
            <?php the_excerpt(); ?>
        </div>

        <a href='<?php echo esc_url(get_permalink()); ?>' class='inline-flex items-center font-medium text-sky-700 transition-colors hover:text-sky-900'>
            <?php esc_html_e('Read more', 'spectre-wordpress-themes'); ?>
        </a>
    </div>
</article>
