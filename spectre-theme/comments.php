<?php if (post_password_required()) : ?>
    <?php return; ?>
<?php endif; ?>

<section id="comments" class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm md:p-10">
    <?php if (have_comments()) : ?>
        <header class="space-y-2">
            <h2 class="text-2xl font-semibold tracking-tight text-slate-900">
                <?php
                printf(
                    esc_html(
                        _n('%s comment', '%s comments', get_comments_number(), 'spectre-wordpress-themes')
                    ),
                    esc_html(number_format_i18n(get_comments_number()))
                );
                ?>
            </h2>
        </header>

        <ol class="mt-6 space-y-6">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 48,
            ));
            ?>
        </ol>

        <?php the_comments_pagination(array(
            'prev_text' => esc_html__('Previous comments', 'spectre-wordpress-themes'),
            'next_text' => esc_html__('Next comments', 'spectre-wordpress-themes'),
        )); ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="mt-6 text-sm text-slate-600"><?php esc_html_e('Comments are closed.', 'spectre-wordpress-themes'); ?></p>
    <?php endif; ?>

    <div class="mt-8">
        <?php comment_form(); ?>
    </div>
</section>
