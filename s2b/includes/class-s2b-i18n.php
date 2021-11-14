<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/CentralTimes/wp_s2b/blob/main/includes/class-s2b-i18n.php
 * @since      1.0.0
 *
 * @package    S2B
 * @subpackage S2B/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    S2B
 * @subpackage S2B/includes
 * @author     Brian Lu <me@greencappuccino.net>
 */
class S2B_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            's2b',
            false,
            dirname(plugin_basename(__FILE__), 2) . '/languages/'
        );

    }


}