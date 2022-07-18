<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Inanto
 * @since             1.0.0
 * @package           coverstory_redirect
 *
 * @wordpress-plugin
 * Plugin Name:       Coverstory Redirect
 * Plugin URI:        https://github.com/Inanto/coverstory_redirect
 * Description:       Custom redirection for Coverstory
 * Version:           1.0.0
 * Author:            Leo Libanan
 * Author URI:        https://github.com/Inanto
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       coverstory_redirect
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'COVERSTORY_REDIRECT', '1.0.0' );

require_once plugin_dir_path( __FILE__ ) . 'includes/coverstory_redirect_class.php';

function run_register_coverstory_redirect() {

	$plugin = new Coverstory_Redirect();
	$plugin->register();

}
run_register_coverstory_redirect();
