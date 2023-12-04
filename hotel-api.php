<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Hotel_Api
 *
 * @wordpress-plugin
 * Plugin Name:       Hotel Api Woocommerce
 * Plugin URI:        http://socialspin.info
 * Description:       Hotels from multiple Api's
 * Version:           1.0.0
 * Author:            Igor Petkovski
 * Author URI:        http://socialspin.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hotel-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'Hotel_Api_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hotel-api-activator.php
 */

function activate_Hotel_Api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hotel-api-activator.php';

	$check = Hotel_Api_Activator::check_plugin();
	Hotel_Api_Activator::activate();
	

}



/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hotel-api-deactivator.php
 */
function deactivate_Hotel_Api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hotel-api-deactivator.php';
	Hotel_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Hotel_Api' );
register_deactivation_hook( __FILE__, 'deactivate_Hotel_Api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hotel-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Hotel_Api() {

	$plugin = new Hotel_Api();
	$plugin->run();

}
run_Hotel_Api();
