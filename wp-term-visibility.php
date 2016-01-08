<?php

/**
 * Plugin Name: WP Term Visibility
 * Plugin URI:  https://wordpress.org/plugins/wp-term-visibility/
 * Description: Visibility for categories, tags, and other taxonomy terms
 * Author:      John James Jacoby
 * Version:     0.2.0
 * Author URI:  https://profiles.wordpress.org/johnjamesjacoby/
 * License:     GPL v2 or later
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Include the required files & dependencies
 *
 * @since 0.1.2
 */
function _wp_term_visibility() {

	// Setup the main file
	$plugin_path = plugin_dir_path( __FILE__ );

	// Include the main class
	require_once $plugin_path . '/includes/functions.php';
	require_once $plugin_path . '/includes/class-wp-term-meta-ui.php';
	require_once $plugin_path . '/includes/class-wp-term-visibility.php';
}
add_action( 'plugins_loaded', '_wp_term_visibility' );

/**
 * Instantiate the main class
 *
 * @since 0.2.0
 */
function _wp_term_visibility_init() {
	new WP_Term_Visibility( __FILE__ );
}
add_action( 'init', '_wp_term_visibility_init', 75 );
