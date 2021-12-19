<?php
/**
 * Plugin Name: Fake newser
 * Version: 1.0.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: fake-newser
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-fake-newser.php';
require_once 'includes/class-fake-newser-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-fake-newser-admin-api.php';
require_once 'includes/lib/class-fake-newser-post-type.php';
require_once 'includes/lib/class-fake-newser-taxonomy.php';

/**
 * Returns the main instance of Fake_newser to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Fake_newser
 */
function fake_newser() {
	$instance = Fake_newser::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Fake_newser_Settings::instance( $instance );
	}

	return $instance;
}

fake_newser();
