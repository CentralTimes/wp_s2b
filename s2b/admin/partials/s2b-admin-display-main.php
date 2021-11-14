<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/CentralTimes/wp_s2b/blob/main/admin/partials/s2b-admin-display.php
 * @since      1.0.0
 *
 * @package    S2B
 * @subpackage S2B/admin/partials
 */
?>

<div class="wrap">
    <h1>
        <img src="<?php echo WP_PLUGIN_URL . '/s2b/images/s2b.png' ?>"
             alt="<?php echo esc_html(get_admin_page_title()); ?>" style="height: 100px;"/>
    </h1>
    <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "s2b_options"
        settings_fields('s2b_options');
        // output setting sections and their fields
        // (sections are registered for "s2b", each field is registered to a specific section)
        do_settings_sections('s2b');
        // output save settings button
        submit_button(__('Save Settings', 's2b'));
        ?>
    </form>
</div>