<article id='post-<?php the_ID(); ?>' <?php post_class('rounded-2xl border border-slate-200 bg-white p-8 shadow-sm md:p-10'); ?>>
    <header class='mb-8 space-y-4'>
        <div class='text-sm text-slate-500'>
            <time datetime='<?php echo esc_attr(get_the_date('c')); ?>'><?php echo esc_html(get_the_date()); ?></time>
            <span class='mx-2'>&bull;</span>
            <span><?php echo esc_html(get_the_author()); ?></span>
        </div>

        <h1 class='text-4xl font-semibold tracking-tight text-slate-900'><?php the_title(); ?></h1>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class='mb-8 overflow-hidden rounded-2xl'>
            <?php the_post_thumbnail('full', array('class' => 'h-auto w-full object-cover')); ?>
        </div>
    <?php endif; ?>

    <div class='prose prose-slate max-w-none'>
        <?php the_content(); ?>
    </div>
</article>
