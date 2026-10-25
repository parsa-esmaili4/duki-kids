<?php
/**
 * Shared product card data.
 *
 * @package Duki_Kids
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Audience pills shown on product cards, keyed by slug.
 *
 * @return array<string, array{label: string, icon: string}>
 */
function duki_kids_product_audiences() {
	return array(
		'girls'   => array(
			'label' => __( 'دخترانه', 'duki-kids' ),
			'icon'  => '<path d="M4.9 19.4v-5.5C4.9 9 8.1 5 12 5s7.1 4 7.1 8.9v5.5"/><circle cx="12" cy="14" r="5"/><path d="M7.3 11.6c2.7 0 4.9-1.2 6.2-3.5.8 1.7 2 2.8 3.6 3.3"/><circle cx="10.1" cy="14.3" r=".85" fill="currentColor" stroke="none"/><circle cx="13.9" cy="14.3" r=".85" fill="currentColor" stroke="none"/><path d="M10.7 16.6c.8.6 1.8.6 2.6 0"/>',
		),
		'boys'    => array(
			'label' => __( 'پسرانه', 'duki-kids' ),
			'icon'  => '<circle cx="12" cy="13.2" r="7.4"/><path d="M6.4 10.4c2 1.1 5.8 1.2 8.2-1.2.5 1.2 1.5 2 2.9 2.3"/><path d="M10.2 6c1.1-1 2.6-1.2 3.8-.5"/><circle cx="10.1" cy="13.6" r=".85" fill="currentColor" stroke="none"/><circle cx="13.9" cy="13.6" r=".85" fill="currentColor" stroke="none"/><path d="M10.4 16.4c.9.7 2.3.7 3.2 0"/>',
		),
		'newborn' => array(
			'label' => __( 'نوزادی', 'duki-kids' ),
			'icon'  => '<circle cx="12" cy="13.4" r="7.2"/><path d="M12 6.2c-.7-1.7.4-3 1.9-2.6"/><path d="M4.8 12.2a1.9 1.9 0 0 0 0 3.2M19.2 12.2a1.9 1.9 0 0 1 0 3.2"/><circle cx="10.1" cy="12.9" r=".85" fill="currentColor" stroke="none"/><circle cx="13.9" cy="12.9" r=".85" fill="currentColor" stroke="none"/><path d="M10.2 15.8c1 .9 2.6.9 3.6 0"/>',
		),
	);
}
