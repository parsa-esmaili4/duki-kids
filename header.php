<?php
/**
 * Site header. Markup stays aligned with the header in index.html.
 *
 * @package Duki_Kids
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'رفتن به محتوا', 'duki-kids' ); ?></a>
<header class="site-header" id="header">
	<div class="container site-header__bar">
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'دوکی', 'duki-kids' ); ?>">
			<img class="site-logo__img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="" width="419" height="166">
		</a>

		<div class="site-header__quick">
			<a class="icon-button" href="#account" aria-label="<?php esc_attr_e( 'حساب کاربری', 'duki-kids' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="8" r="3.1" stroke="currentColor" stroke-width="1.7"/><path d="M5.6 19c1.1-2.9 3.3-4.4 6.4-4.4s5.3 1.5 6.4 4.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
			</a>
			<a class="icon-button" href="#cart" aria-label="<?php esc_attr_e( 'سبد خرید', 'duki-kids' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.5 8h11l-.8 11.2a1.5 1.5 0 0 1-1.5 1.3H8.8a1.5 1.5 0 0 1-1.5-1.3L6.5 8z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M9 8V6.8A3 3 0 0 1 12 3.8 3 3 0 0 1 15 6.8V8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
			</a>
		</div>

		<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
			<span class="nav-toggle__icon" aria-hidden="true"></span>
			<span class="sr-only"><?php esc_html_e( 'منو', 'duki-kids' ); ?></span>
		</button>

		<div class="site-header__cluster" id="site-nav">
			<nav class="site-nav" aria-label="<?php esc_attr_e( 'منوی اصلی', 'duki-kids' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'site-nav__list',
						'fallback_cb'    => 'duki_kids_primary_menu_fallback',
						'depth'          => 1,
					)
				);
				?>
			</nav>
			<div class="site-header__actions">
				<a class="button button--price" href="#price-list">
					<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 3.8h7.1L18 7.7V20a1.2 1.2 0 0 1-1.2 1.2H7A1.2 1.2 0 0 1 5.8 20V5A1.2 1.2 0 0 1 7 3.8z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M14 3.9V8h4M8.4 12.2h7.2M8.4 15.6h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
					<?php esc_html_e( 'دریافت لیست قیمت', 'duki-kids' ); ?>
				</a>
				<a class="icon-button icon-button--account" href="#account" aria-label="<?php esc_attr_e( 'حساب کاربری', 'duki-kids' ); ?>">
					<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="8" r="3.1" stroke="currentColor" stroke-width="1.7"/><path d="M5.6 19c1.1-2.9 3.3-4.4 6.4-4.4s5.3 1.5 6.4 4.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
				</a>
				<a class="icon-button" href="#cart" aria-label="<?php esc_attr_e( 'سبد خرید', 'duki-kids' ); ?>">
					<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.5 8h11l-.8 11.2a1.5 1.5 0 0 1-1.5 1.3H8.8a1.5 1.5 0 0 1-1.5-1.3L6.5 8z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M9 8V6.8A3 3 0 0 1 12 3.8 3 3 0 0 1 15 6.8V8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
				</a>
			</div>
		</div>
	</div>
</header>
