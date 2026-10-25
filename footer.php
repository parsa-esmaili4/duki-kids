<?php
/**
 * Site footer. Markup stays aligned with the footer in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri = get_template_directory_uri();

$duki_kids_footer_columns = array(
	'quick'      => array(
		'title' => __( 'لینک‌های سریع', 'duki-kids' ),
		'icon'  => '<path d="M2.9 11.3 12 3.6l9.1 7.7-1.2 1.4-1.3-1.1v8.2a1.2 1.2 0 0 1-1.2 1.2h-3.6v-5.6h-3.6V21H6.6a1.2 1.2 0 0 1-1.2-1.2v-8.2l-1.3 1.1-1.2-1.4z" fill="currentColor"/>',
		'menu'  => 'footer',
		'links' => array(
			array( __( 'صفحه اصلی', 'duki-kids' ), '#hero' ),
			array( __( 'محصولات', 'duki-kids' ), '#products' ),
			array( __( 'درباره ما', 'duki-kids' ), '#about' ),
			array( __( 'تماس با ما', 'duki-kids' ), '#footer' ),
			array( __( 'وبلاگ', 'duki-kids' ), '#journal' ),
		),
	),
	'categories' => array(
		'title' => __( 'دسته‌بندی محصولات', 'duki-kids' ),
		'icon'  => '<path d="M2.8 6.6a1.8 1.8 0 0 1 1.8-1.8h4.7l2.1 2.3h8a1.8 1.8 0 0 1 1.8 1.8v9.5a1.8 1.8 0 0 1-1.8 1.8H4.6a1.8 1.8 0 0 1-1.8-1.8V6.6z" fill="currentColor"/><path d="M2.8 10.2h18.4" stroke="#0d1e39" stroke-opacity=".22" stroke-width="1.4"/>',
		'menu'  => '',
		'links' => array(
			array( __( 'پوشاک نوزادی', 'duki-kids' ), '#categories' ),
			array( __( 'پوشاک دخترانه', 'duki-kids' ), '#categories' ),
			array( __( 'پوشاک پسرانه', 'duki-kids' ), '#categories' ),
			array( __( 'ست‌های لباس', 'duki-kids' ), '#categories' ),
			array( __( 'اکسسوری کودک', 'duki-kids' ), '#categories' ),
		),
	),
	'services'   => array(
		'title' => __( 'خدمات مشتریان', 'duki-kids' ),
		'icon'  => '<path d="M4.6 14.2V12a7.4 7.4 0 0 1 14.8 0v2.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><rect x="3.4" y="12.4" width="4.2" height="6.4" rx="1.7" fill="currentColor"/><rect x="16.4" y="12.4" width="4.2" height="6.4" rx="1.7" fill="currentColor"/><path d="M18.5 18.6c0 1.5-1.2 2.5-3 2.5h-2.3" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>',
		'menu'  => '',
		'links' => array(
			array( __( 'نحوه ثبت سفارش', 'duki-kids' ), '#how-to-order' ),
			array( __( 'شیوه‌های پرداخت', 'duki-kids' ), '#payment' ),
			array( __( 'شرایط ارسال', 'duki-kids' ), '#shipping' ),
			array( __( 'سوالات متداول', 'duki-kids' ), '#faq' ),
			array( __( 'پشتیبانی', 'duki-kids' ), '#support' ),
		),
	),
);

$duki_kids_footer_social = array(
	array(
		'label' => __( 'روبیکا', 'duki-kids' ),
		'link'  => '#',
		'icon'  => '<g fill="none" stroke="currentColor" stroke-width="1.9"><circle cx="8.4" cy="8.4" r="3.3"/><circle cx="15.6" cy="8.4" r="3.3"/><circle cx="8.4" cy="15.6" r="3.3"/><circle cx="15.6" cy="15.6" r="3.3"/></g>',
	),
	array(
		'label' => __( 'تلگرام', 'duki-kids' ),
		'link'  => '#',
		'icon'  => '<path d="M20.4 4.4 3.3 11.1c-.9.4-.9 1.6 0 1.9l4.2 1.4 1.6 5.1c.2.7 1.1.9 1.6.4l2.4-2.4 4.4 3.2c.6.4 1.5.1 1.6-.6l2.6-13.4c.2-.9-.6-1.6-1.3-1.3z" fill="currentColor"/><path class="site-footer__cut" d="m8.2 14 8.3-6.1-6.4 7.2-.4 3.3" fill="none" stroke-width="1.2" stroke-linejoin="round"/>',
	),
	array(
		'label' => __( 'اینستاگرام', 'duki-kids' ),
		'link'  => '#',
		'icon'  => '<g fill="none" stroke="currentColor" stroke-width="1.9"><rect x="4" y="4" width="16" height="16" rx="4.6"/><circle cx="12" cy="12" r="3.7"/></g><circle cx="16.6" cy="7.4" r="1.15" fill="currentColor"/>',
	),
);

$duki_kids_footer_trust = array(
	'mellat'    => array(
		'label' => __( 'بانک ملت', 'duki-kids' ),
		'icon'  => '<path d="M12 3.6 15.4 7 12 10.4 8.6 7zM7 8.6l3.4 3.4L7 15.4 3.6 12zm10 0 3.4 3.4-3.4 3.4-3.4-3.4zm-5 5 3.4 3.4-3.4 3.4L8.6 17z" fill="#d8232c"/>',
	),
	'idpay'     => array(
		'label' => 'IDPay',
		'icon'  => '<rect x="2.6" y="4.6" width="18.8" height="14.8" rx="3.6" fill="#1f56d6"/><path d="M7.7 9v6M10.8 9h1.5a3 3 0 0 1 0 6h-1.5z" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>',
	),
	'zarinpal'  => array(
		'label' => __( 'زرین‌پال', 'duki-kids' ),
		'icon'  => '<rect x="3.2" y="3.2" width="17.6" height="17.6" rx="4.4" fill="#f5b51b"/><path d="M8.2 8.4h7.6l-7.6 7.2h7.6" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
	),
	'enamad'    => array(
		'label' => __( 'نماد', 'duki-kids' ),
		'icon'  => '<path d="M5.4 13.4c3.8.8 9.3 0 11-2.8 1.2-2-.4-3.9-2.9-3.6-3.9.4-7.6 4.6-7.2 8.2.4 3.4 5 4.2 9.8 1.5" fill="none" stroke="#1d4db5" stroke-width="2.1" stroke-linecap="round"/>',
	),
);
?>
<footer class="site-footer" id="footer">
	<div class="site-footer__scene" aria-hidden="true">
		<div class="container">
			<div class="site-footer__art">
				<span class="site-footer__leaf site-footer__leaf--a"></span>
				<span class="site-footer__leaf site-footer__leaf--b"></span>
				<span class="site-footer__leaf site-footer__leaf--c"></span>
				<span class="site-footer__leaf site-footer__leaf--d"></span>
				<svg class="site-footer__flowers" viewBox="0 0 150 120">
					<defs>
						<g id="footer-daisy">
							<g fill="#fff" stroke="#eadcc8" stroke-width=".6">
								<ellipse cy="-7.6" rx="3" ry="6.6"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(36)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(72)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(108)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(144)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(180)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(216)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(252)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(288)"/>
								<ellipse cy="-7.6" rx="3" ry="6.6" transform="rotate(324)"/>
							</g>
							<circle r="4.4" fill="#f1b23a"/>
							<circle r="2" cx="-1" cy="-1" fill="#f7cd6b"/>
						</g>
					</defs>
					<g fill="none" stroke="#7d9a4b" stroke-width="2" stroke-linecap="round">
						<path d="M92 118C90 92 96 64 112 30"/>
						<path d="M70 118c0-18-8-34-24-48"/>
						<path d="M98 118c4-14 14-26 30-34"/>
					</g>
					<g fill="#87a554">
						<path d="M104 52c-10-4-16-14-14-26 10 4 16 14 14 26z"/>
						<path d="M96 80c10-2 18-10 20-22-11 1-19 9-20 22z"/>
						<path d="M58 84c-10 0-19-6-22-17 11-1 20 6 22 17z"/>
						<path d="M116 96c8-6 18-7 26-2-7 7-17 8-26 2z"/>
					</g>
					<g fill="#6c8b3d">
						<path d="M112 30c-1-10 4-19 13-23 2 10-3 19-13 23z"/>
						<path d="M82 100c-9-5-13-14-11-24 9 5 13 14 11 24z"/>
					</g>
					<use href="#footer-daisy" transform="translate(46 68)"/>
					<use href="#footer-daisy" transform="translate(126 82) scale(.82)"/>
					<use href="#footer-daisy" transform="translate(30 102) scale(.92)"/>
				</svg>
				<svg class="site-footer__sprig" viewBox="0 0 60 100">
					<path d="M18 98c4-26 14-52 30-80" fill="none" stroke="#7d9a4b" stroke-width="2" stroke-linecap="round"/>
					<g fill="#87a554">
						<path d="M44 26c-2-9 2-18 11-22 2 9-2 18-11 22z"/>
						<path d="M33 50c-8-5-11-13-9-22 8 4 11 13 9 22z"/>
						<path d="M37 56c8-4 16-3 22 3-8 5-16 5-22-3z"/>
						<path d="M24 76c-8-4-12-12-10-21 8 4 12 12 10 21z"/>
						<path d="M27 82c8-3 16-2 21 4-8 4-16 3-21-4z"/>
					</g>
				</svg>
				<img class="site-footer__mascot" src="<?php echo esc_url( $duki_kids_uri . '/assets/images/footer-mascot.png' ); ?>" alt="" width="820" height="592" loading="lazy">
			</div>
		</div>
		<svg class="site-footer__wave" viewBox="0 0 1440 90" preserveAspectRatio="none">
			<path d="M0 34C150 8 300 4 460 22c140 16 240 40 400 42 140 2 340-4 580-12v38H0z"/>
		</svg>
	</div>

	<div class="site-footer__body">
		<span class="site-footer__shade site-footer__shade--a" aria-hidden="true"></span>
		<span class="site-footer__shade site-footer__shade--b" aria-hidden="true"></span>
		<span class="site-footer__shade site-footer__shade--c" aria-hidden="true"></span>

		<div class="container">
			<div class="site-footer__grid">
				<div class="site-footer__about">
					<a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( $duki_kids_uri . '/assets/images/logo-light.png' ); ?>" alt="<?php esc_attr_e( 'دوکی', 'duki-kids' ); ?>" width="419" height="166" loading="lazy">
					</a>
					<p class="site-footer__tagline"><?php esc_html_e( 'همراه مطمئن فروشگاه‌های', 'duki-kids' ); ?><br><?php esc_html_e( 'پوشاک کودک و نوزاد', 'duki-kids' ); ?></p>
					<p class="site-footer__desc"><?php esc_html_e( 'تأمین‌کننده تخصصی پوشاک کودک و نوزاد با تنوع بالا، کیفیت تضمین‌شده و قیمت مناسب ویژه فروشگاه‌ها.', 'duki-kids' ); ?></p>
					<ul class="site-footer__social">
						<?php foreach ( $duki_kids_footer_social as $duki_kids_social ) : ?>
							<li>
								<a href="<?php echo esc_url( $duki_kids_social['link'] ); ?>" aria-label="<?php echo esc_attr( $duki_kids_social['label'] ); ?>">
									<svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $duki_kids_social['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<?php foreach ( $duki_kids_footer_columns as $duki_kids_key => $duki_kids_column ) : ?>
					<nav class="site-footer__col" aria-labelledby="footer-<?php echo esc_attr( $duki_kids_key ); ?>-title">
						<h2 class="site-footer__title" id="footer-<?php echo esc_attr( $duki_kids_key ); ?>-title">
							<svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $duki_kids_column['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg>
							<?php echo esc_html( $duki_kids_column['title'] ); ?>
						</h2>
						<?php if ( $duki_kids_column['menu'] && has_nav_menu( $duki_kids_column['menu'] ) ) : ?>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => $duki_kids_column['menu'],
									'container'      => false,
									'menu_class'     => 'site-footer__links',
									'depth'          => 1,
								)
							);
							?>
						<?php else : ?>
							<ul class="site-footer__links">
								<?php foreach ( $duki_kids_column['links'] as $duki_kids_link ) : ?>
									<li><a href="<?php echo esc_url( $duki_kids_link[1] ); ?>"><?php echo esc_html( $duki_kids_link[0] ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</nav>
				<?php endforeach; ?>

				<div class="site-footer__col site-footer__col--contact">
					<h2 class="site-footer__title">
						<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.7 3.5c.6-.5 1.4-.4 1.9.2l2.1 2.7c.4.6.4 1.4-.1 1.9L9.2 9.7a11.6 11.6 0 0 0 5.1 5.1l1.4-1.4c.5-.5 1.3-.5 1.9-.1l2.7 2.1c.6.5.7 1.3.2 1.9l-1.3 1.6c-.8.9-2 1.3-3.2.9C10.4 18 6 13.6 4.2 8c-.4-1.2 0-2.4.9-3.2l1.6-1.3z" fill="currentColor"/></svg>
						<?php esc_html_e( 'اطلاعات تماس', 'duki-kids' ); ?>
					</h2>
					<address class="site-footer__contact">
						<p class="site-footer__contact-item">
							<span class="site-footer__contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M6.7 3.5c.6-.5 1.4-.4 1.9.2l2.1 2.7c.4.6.4 1.4-.1 1.9L9.2 9.7a11.6 11.6 0 0 0 5.1 5.1l1.4-1.4c.5-.5 1.3-.5 1.9-.1l2.7 2.1c.6.5.7 1.3.2 1.9l-1.3 1.6c-.8.9-2 1.3-3.2.9C10.4 18 6 13.6 4.2 8c-.4-1.2 0-2.4.9-3.2l1.6-1.3z" fill="currentColor"/></svg></span>
							<a href="tel:+982112345678" dir="ltr"><?php esc_html_e( '۰۲۱ ۱۲۳۴ ۵۶۷۸', 'duki-kids' ); ?></a>
						</p>
						<p class="site-footer__contact-item">
							<span class="site-footer__contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5.4" width="18" height="13.2" rx="2.2" fill="currentColor"/><path class="site-footer__cut" d="m4.4 7.4 7.6 5.8 7.6-5.8" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
							<a href="mailto:info@duki.ir" dir="ltr">info@duki.ir</a>
						</p>
						<p class="site-footer__contact-item">
							<span class="site-footer__contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2.6a7 7 0 0 0-7 7c0 5 7 11.8 7 11.8s7-6.8 7-11.8a7 7 0 0 0-7-7z" fill="currentColor"/><circle class="site-footer__cut" cx="12" cy="9.6" r="2.6"/></svg></span>
							<span><?php esc_html_e( 'تهران، خیابان مثال', 'duki-kids' ); ?><br><?php esc_html_e( 'پلاک ۱۲، واحد ۳', 'duki-kids' ); ?></span>
						</p>
					</address>
				</div>
			</div>

			<div class="site-footer__bottom">
				<ul class="site-footer__trust" aria-label="<?php esc_attr_e( 'نمادها و درگاه‌های پرداخت', 'duki-kids' ); ?>">
					<?php foreach ( $duki_kids_footer_trust as $duki_kids_key => $duki_kids_badge ) : ?>
						<li class="trust-badge trust-badge--<?php echo esc_attr( $duki_kids_key ); ?>">
							<svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $duki_kids_badge['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg>
							<span<?php echo 'idpay' === $duki_kids_key ? ' lang="en"' : ''; ?>><?php echo esc_html( $duki_kids_badge['label'] ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
				<p class="site-footer__copy"><?php esc_html_e( '© تمامی حقوق برای فروشگاه دوکی محفوظ است.', 'duki-kids' ); ?></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
