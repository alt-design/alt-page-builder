<?php
/**
 *
 * @link              https://alt-design.net
 * @since             0.0.1
 * @package           Alt Page Builder
 *
 * @wordpress-plugin
 * Plugin Name:       Alt Page Builder
 * Plugin URI:        https://alt-design.net
 * Description:       This plugin utilizes Vue.js V2 to allow the building of pages by linking to ACF.
 * Version:           0.0.1
 * Author:            Ben Harvey
 * Author URI:        https://alt-design.net/
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       alt-page-builder
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function activate_altPageBuilder() {

}

function deactivate_altPageBuilder() {

}
register_activation_hook( __FILE__, 'activate_altPageBuilder' );
register_deactivation_hook( __FILE__, 'deactivate_altPageBuilder' );

require plugin_dir_path( __FILE__ ) . 'includes/class-altPageBuilder.php';

function run_altPageBuilder() {
	$plugin = new altPageBuilder();
	$plugin->run();
}
run_altPageBuilder();
