<?php
/**
 * Duki Kids theme bootstrap.
 *
 * @package Duki_Kids
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DUKI_KIDS_VERSION', wp_get_theme()->get( 'Version' ) );

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/products.php';
