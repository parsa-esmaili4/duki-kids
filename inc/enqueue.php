<?php
/**
 * Front-end styles and scripts.
 *
 * @package Duki_Kids
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the same assets used by index.html.
 */
function duki_kids_enqueue_assets() {
	wp_enqueue_style(
		'duki-kids-font',
		'https://fonts.googleapis.com/css2?family=Nunito:wght@700;800&family=Vazirmatn:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'duki-kids-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'duki-kids-font' ),
		DUKI_KIDS_VERSION
	);

	wp_enqueue_script(
		'duki-kids-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		DUKI_KIDS_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'duki_kids_enqueue_assets' );
