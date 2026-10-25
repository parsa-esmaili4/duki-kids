<?php
/**
 * Theme supports, menus, and static nav fallback.
 *
 * @package Duki_Kids
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports and nav locations.
 */
function duki_kids_setup() {
	load_theme_textdomain( 'duki-kids', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'منوی اصلی', 'duki-kids' ),
			'footer'  => __( 'منوی فوتر', 'duki-kids' ),
		)
	);
}
add_action( 'after_setup_theme', 'duki_kids_setup' );

/**
 * Same links as the static header in index.html, until a menu is assigned.
 */
function duki_kids_primary_menu_fallback( $args = array() ) {
	?>
	<ul class="site-nav__list">
		<li><a class="is-active" href="#hero" aria-current="page"><?php esc_html_e( 'صفحه اصلی', 'duki-kids' ); ?></a></li>
		<li class="site-nav__item">
			<button class="nav-sub-toggle" type="button" aria-expanded="false" aria-controls="products-menu" aria-haspopup="true">
				<?php esc_html_e( 'محصولات', 'duki-kids' ); ?>
				<svg class="nav-caret" viewBox="0 0 16 16" aria-hidden="true"><path d="M4 6.2 8 10l4-3.8" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<div class="site-nav__sub" id="products-menu">
				<ul>
					<li><a href="#products"><?php esc_html_e( 'لباس نوزاد', 'duki-kids' ); ?></a></li>
					<li><a href="#products"><?php esc_html_e( 'لباس دخترانه', 'duki-kids' ); ?></a></li>
					<li><a href="#products"><?php esc_html_e( 'لباس پسرانه', 'duki-kids' ); ?></a></li>
				</ul>
			</div>
		</li>
		<li><a href="#about"><?php esc_html_e( 'درباره ما', 'duki-kids' ); ?></a></li>
		<li><a href="#partnership"><?php esc_html_e( 'همکاری با ما', 'duki-kids' ); ?></a></li>
		<li><a href="#journal"><?php esc_html_e( 'مجله', 'duki-kids' ); ?></a></li>
	</ul>
	<?php
}
