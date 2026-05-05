<footer class="site-footer bg-(--sp-color-neutral-800) text-white p-8 mt-12">
    <div class="container mx-auto space-y-6 text-center">
        <?php if (has_nav_menu('footer')) : ?>
            <nav aria-label="<?php esc_attr_e('Footer Navigation', 'spectre-wordpress-themes'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'flex flex-wrap justify-center gap-6 text-sm text-(--sp-color-neutral-300)',
                    'container'      => false,
                    'depth'          => 1,
                ));
                ?>
            </nav>
        <?php endif; ?>

        <?php if (spectre_wordpress_themes_has_icons()) : ?>
            <div class="flex justify-center gap-4 text-(--sp-color-neutral-400)" aria-label="<?php esc_attr_e('Social links', 'spectre-wordpress-themes'); ?>">
                <?php echo do_shortcode('[spectre-icon name="github" size="20"]'); ?>
                <?php echo do_shortcode('[spectre-icon name="twitter" size="20"]'); ?>
                <?php echo do_shortcode('[spectre-icon name="linkedin" size="20"]'); ?>
            </div>
        <?php endif; ?>

        <p class="text-sm text-(--sp-color-neutral-400)">&copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?>. <?php esc_html_e('All rights reserved.', 'spectre-wordpress-themes'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
