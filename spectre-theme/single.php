<?php get_header(); ?>

<main class='container mx-auto space-y-10 px-4 py-10'>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'single'); ?>

            <nav class='flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 text-sm shadow-sm md:flex-row md:items-center md:justify-between'>
                <div><?php previous_post_link('%link', '&larr; %title'); ?></div>
                <div><?php next_post_link('%link', '%title &rarr;'); ?></div>
            </nav>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
