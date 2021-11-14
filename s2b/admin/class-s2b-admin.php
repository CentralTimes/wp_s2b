<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/CentralTimes/wp_s2b/blob/main/admin/class-s2b-admin.php
 * @since      1.0.0
 *
 * @package    S2B
 * @subpackage S2B/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    S2B
 * @subpackage S2B/admin
 * @author     Brian Lu <me@greencappuccino.net>
 */
class S2B_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private string $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private string $version;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $plugin_name The name of this plugin.
     * @param string $version The version of this plugin.
     * @since    1.0.0
     */
    public function __construct(string $plugin_name, string $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Add admin menus to place on the sidebar
     *
     * @since    1.0.0
     */
    public function add_admin_menus()
    {
        add_menu_page(
            'S2B',
            'S2B Options',
            'manage_options',
            plugin_dir_path(__FILE__) . 'partials/s2b-admin-display-main.php',
            null,
            WP_PLUGIN_URL . '/s2b/images/s2b-icon20.png',
            20
        );
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/s2b-admin.css', array(), $this->version);

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/s2b-admin.js', array('jquery'), $this->version);
    }
}