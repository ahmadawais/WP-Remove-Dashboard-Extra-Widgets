<?php
/**
 * Plugin Name: WP Remove Dashboard Extra Widgets
 * Plugin URI: https://AhmadAwais.com/
 * Description: Removes the WordPress dashboard widgets that are extra and useless i.e. plugins, wp blog news etc.
 * Author: WPCouple(Ahmad Awais & Maedah Batool)
 * Author URI: https://AhmadAwais.com/
 * Version: 2.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Hook.
add_action('wp_dashboard_setup', 'wpc_remove_dashboard_widgets', 9999 );

/**
 * Removes all dashboard widgets.
 *
 * @since 1.0.0
 */
function wpc_remove_dashboard_widgets() {
	// Get global obj.
	global $wp_meta_boxes;

	// Left side metaboxes.
	$wp_meta_boxes['dashboard']['normal']['core'] = array();

	// Right side metaboxes.
	$wp_meta_boxes['dashboard']['side']['core'] = array();
}
