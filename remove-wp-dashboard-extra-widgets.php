<?php
/*
Plugin Name: Remove WP Dashboard Extra Widgets by Ahmad Awais
Plugin URI: http://freakify.com/2011/08/wp-remove-dashboard-extra-widgets-plugin-of-wordpress-by-ahmad-awais/
Description: Removes the WordPress dashboard widgets that are extra and useless i.e. plugins, wp blog news etc
Version: 1.1
Author: Ahmad Awais
Author URI: http://AhmadAwais.com/
License:GPL2

*/




add_action( 'wp_dashboard_setup', 'remove_wp_dashboard_extra_widgets' );

function remove_wp_dashboard_extra_widgets() {
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
}



