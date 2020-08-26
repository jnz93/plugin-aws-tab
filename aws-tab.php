<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              unitycode.tech
 * @since             1.0.0
 * @package           Aws_Tab
 *
 * @wordpress-plugin
 * Plugin Name:       AwsTab
 * Plugin URI:        https://github.com/joanezandrades/plugin-aws-tab
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            jnz93
 * Author URI:        unitycode.tech
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aws-tab
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
define( 'AWS_TAB_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-aws-tab-activator.php
 */
function activate_aws_tab() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aws-tab-activator.php';
	Aws_Tab_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-aws-tab-deactivator.php
 */
function deactivate_aws_tab() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aws-tab-deactivator.php';
	Aws_Tab_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_aws_tab' );
register_deactivation_hook( __FILE__, 'deactivate_aws_tab' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-aws-tab.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_aws_tab() {

	$plugin = new Aws_Tab();
	$plugin->run();

}
run_aws_tab();
