<footer class="site-footer spectre-site-footer">
    <div class="spectre-site-container spectre-site-footer__inner">
        <?php if (has_nav_menu('footer')) : ?>
            <nav aria-label="<?php esc_attr_e('Footer Navigation', 'spectre-wordpress-themes'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'spectre-footer-menu',
                    'container'      => false,
                    'depth'          => 1,
                ));
                ?>
            </nav>
        <?php endif; ?>

        <?php if (spectre_wordpress_themes_has_icons()) : ?>
            <div class="spectre-site-footer__social" aria-label="<?php esc_attr_e('Social links', 'spectre-wordpress-themes'); ?>">
                <?php echo do_shortcode('[spectre-icon name="github" size="20"]'); ?>
                <?php echo do_shortcode('[spectre-icon name="twitter" size="20"]'); ?>
                <?php echo do_shortcode('[spectre-icon name="linkedin" size="20"]'); ?>
            </div>
        <?php endif; ?>

        <p class="spectre-site-footer__meta">&copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?>. <?php esc_html_e('All rights reserved.', 'spectre-wordpress-themes'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
