<?php get_header(); ?>

<main class='container mx-auto space-y-10 px-4 py-10'>
    <header class='space-y-3'>
        <p class='text-sm font-medium uppercase tracking-[0.2em] text-(--sp-text-on-page-brand)'><?php esc_html_e('Search', 'spectre-wordpress-themes'); ?></p>
        <h1 class='text-4xl font-semibold tracking-tight text-(--sp-text-on-page-default)'>
            <?php printf(esc_html__('Results for: %s', 'spectre-wordpress-themes'), esc_html(get_search_query())); ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
        <div class='grid gap-8 lg:grid-cols-2'>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'card'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('Previous', 'spectre-wordpress-themes'),
            'next_text' => __('Next', 'spectre-wordpress-themes'),
        )); ?>
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
