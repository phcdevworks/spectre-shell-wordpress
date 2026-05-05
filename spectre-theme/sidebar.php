<?php
if (!is_active_sidebar('sidebar-main')) {
    return;
}
?>

<aside class='w-full space-y-8 lg:w-72 xl:w-80' role='complementary' aria-label='<?php esc_attr_e('Sidebar', 'spectre-wordpress-themes'); ?>'>
    <?php dynamic_sidebar('sidebar-main'); ?>
</aside>
