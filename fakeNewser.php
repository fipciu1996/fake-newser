<?php
/**
 * Plugin Name: Fake newser
 * Version: 1.0.0
 * Plugin URI: 
 * Description: This is plugin which allow to report fake news
 * Author: Mateusz Filipek
 * Author URI: 
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: fake-newser
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Mateusz Filipek
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-fake-newser.php';
require_once 'includes/class-fake-newser-settings.php';

// Load admin classes.
require_once 'includes/admin/admin-fake-newser.php';

// Load plugin libraries.
require_once 'includes/lib/class-fake-newser-admin-api.php';
require_once 'includes/lib/class-fake-newser-post-type.php';
require_once 'includes/lib/class-fake-newser-taxonomy.php';

/**
 * Returns the main instance of fake-newser to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object fake-newser
 */
function fake_newser() {
	$instance = fake_newser::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = fake_newser_Settings::instance( $instance );
	}

	return $instance;
}

fake_newser();
