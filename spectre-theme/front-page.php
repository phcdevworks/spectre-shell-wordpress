<?php get_header(); ?>

<main class='container mx-auto space-y-10 px-4 py-10'>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section class='space-y-6'>
                <header class='space-y-3'>
                    <p class='text-sm font-medium uppercase tracking-[0.2em] text-(--sp-text-on-page-brand)'><?php echo esc_html(get_bloginfo('name')); ?></p>
                    <h1 class='text-5xl font-semibold tracking-tight text-(--sp-text-on-page-default)'><?php the_title(); ?></h1>
                    <?php if (has_excerpt()) : ?>
                        <p class='max-w-3xl text-lg text-(--sp-text-on-page-muted)'><?php echo esc_html(get_the_excerpt()); ?></p>
                    <?php endif; ?>
                </header>

                <div class='prose max-w-none rounded-2xl border border-(--sp-color-neutral-200) bg-(--sp-surface-card) p-8 shadow-sm md:p-10'>
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
