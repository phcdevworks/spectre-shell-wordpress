<article id='post-<?php the_ID(); ?>' <?php post_class('rounded-2xl border border-slate-200 bg-white p-8 shadow-sm md:p-10'); ?>>
    <header class='mb-8 space-y-3'>
        <h1 class='text-4xl font-semibold tracking-tight text-slate-900'><?php the_title(); ?></h1>
    </header>

    <div class='prose prose-slate max-w-none'>
        <?php the_content(); ?>
    </div>
</article>
