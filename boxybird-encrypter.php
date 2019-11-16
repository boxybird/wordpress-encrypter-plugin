<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              andrewrhyand.com
 * @since             1.0.0
 * @package           Boxybird_Encrypter
 *
 * @wordpress-plugin
 * Plugin Name:       BoxyBird Encrypter
 * Plugin URI:        #
 * Description:       A set of encryption/decryption functions based on Laravel Encryption class.
 * Version:           1.0.0
 * Author:            Andrew Rhyand
 * Author URI:        andrewrhyand.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       boxybird-encrypter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('BOXYBIRD_ENCRYPTER_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-boxybird-encrypter-activator.php
 */
function activate_boxybird_encrypter()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-boxybird-encrypter-activator.php';
    Boxybird_Encrypter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-boxybird-encrypter-deactivator.php
 */
function deactivate_boxybird_encrypter()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-boxybird-encrypter-deactivator.php';
    Boxybird_Encrypter_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_boxybird_encrypter');
register_deactivation_hook(__FILE__, 'deactivate_boxybird_encrypter');

/**
 * The core plugin class
 */
require plugin_dir_path(__FILE__) . 'includes/class-boxybird-encrypter.php';

/**
 * The encrypt/decrypt helper functions
 */
require plugin_dir_path(__FILE__) . 'includes/boxybird-functions.php';
