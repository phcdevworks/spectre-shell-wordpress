<?php get_header(); ?>

<main class='container mx-auto space-y-(--sp-space-40) px-(--sp-layout-container-padding-inline-sm) md:px-(--sp-layout-container-padding-inline-md) py-(--sp-space-40)'>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'single'); ?>

            <?php if (comments_open() || get_comments_number()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

            <nav class='flex flex-col gap-(--sp-space-16) rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-(--sp-space-24) text-sm shadow-sm md:flex-row md:items-center md:justify-between'>
                <div><?php previous_post_link('%link', '&larr; %title'); ?></div>
                <div><?php next_post_link('%link', '%title &rarr;'); ?></div>
            </nav>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
