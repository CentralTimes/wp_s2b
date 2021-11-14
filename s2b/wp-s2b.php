<?php

/**
 * S2B: School Staging Bundle
 *
 * School Staging Bundle (S2B), not affiliated with SNO, intends
 * to replicate internal API functionality of various SNO products.
 * Central Times uses S2B on its staging environment for app development.
 *
 * @link            https://github.com/CentralTimes/wp_s2b
 * @since           1.0.0
 * @package         S2B
 * @author          Central Times
 * @copyright       2021 Brian Lu
 * @license         https://www.gnu.org/licenses/gpl-3.0.html GPL3
 *
 * @wordpress-plugin
 * Plugin Name:     S2B
 * Plugin URI:      https://github.com/CentralTimes/wp_s2b
 * Description:     Replicates internal API functionality of various SNO products.
 * Version:         1.0.0
 * Author:          Central Times
 * Author URI:      https://github.com/CentralTimes
 * License:         GPL3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     s2b
 * Domain Path:     /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
const S2B_VERSION = '1.0.0';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-s2b-activator.php
 */
function activate_s2b()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-s2b-activator.php';
    S2B_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-s2b-deactivator.php
 */
function deactivate_s2b()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-s2b-deactivator.php';
    S2B_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_s2b');
register_deactivation_hook(__FILE__, 'deactivate_s2b');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-s2b.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_s2b()
{

    $plugin = new S2B();
    $plugin->run();

}

run_s2b();