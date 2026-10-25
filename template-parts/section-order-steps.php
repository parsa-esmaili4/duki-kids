<?php
/**
 * How to order (wholesale steps). Markup stays aligned with #how-to-order in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri = get_template_directory_uri();

$duki_kids_order_steps = array(
	array(
		'title' => __( 'ثبت‌نام', 'duki-kids' ),
		'desc'  => array( __( 'ایجاد حساب کاربری', 'duki-kids' ), __( 'برای شروع همکاری', 'duki-kids' ) ),
		'view'  => '0 0 24 24',
		'icon'  => '<circle cx="10" cy="7.6" r="3.7"/><path d="M3.4 19.6c.7-3.7 3.3-5.8 6.6-5.8 1.2 0 2.3.3 3.3.8"/><circle cx="17.6" cy="17.6" r="4" fill="currentColor" stroke="none"/><path d="M17.6 15.9v3.4M15.9 17.6h3.4" stroke="#fff" stroke-width="1.5"/>',
	),
	array(
		'title' => __( 'احراز هویت', 'duki-kids' ),
		'desc'  => array( __( 'تأیید اطلاعات فروشگاه', 'duki-kids' ), __( 'و حساب', 'duki-kids' ) ),
		'view'  => '0 0 24 24',
		'icon'  => '<path d="M12 3.1 5.2 5.7v5.6c0 4.3 2.8 7.8 6.8 9.4 4-1.6 6.8-5.1 6.8-9.4V5.7L12 3.1z"/><path d="m9 12.1 2.1 2.1 3.9-4.2"/>',
	),
	array(
		'title' => __( 'ثبت سفارش', 'duki-kids' ),
		'desc'  => array( __( 'انتخاب مدل‌ها و', 'duki-kids' ), __( 'تعداد موردنیاز', 'duki-kids' ) ),
		'view'  => '0 0 24 24',
		'icon'  => '<path d="M6.2 7.9h11.6l.8 11.6a1.4 1.4 0 0 1-1.4 1.5H6.8a1.4 1.4 0 0 1-1.4-1.5l.8-11.6z"/><path d="M9 10.4V6.6a3 3 0 0 1 6 0v3.8"/>',
	),
	array(
		'title' => __( 'پرداخت', 'duki-kids' ),
		'desc'  => array( __( 'تکمیل سفارش و', 'duki-kids' ), __( 'نهایی‌سازی پرداخت', 'duki-kids' ) ),
		'view'  => '0 0 24 24',
		'icon'  => '<rect x="3.4" y="6.6" width="17.2" height="12.8" rx="2.6"/><path d="m5.6 6.6 9.6-2.8a1.6 1.6 0 0 1 2 1.1l.5 1.7"/><circle cx="16.6" cy="13" r="1.1" fill="currentColor" stroke="none"/>',
	),
	array(
		'title' => __( 'ارسال کالا', 'duki-kids' ),
		'desc'  => array( __( 'بسته‌بندی و ارسال سریع', 'duki-kids' ), __( 'به مقصد', 'duki-kids' ) ),
		'view'  => '0 0 30 24',
		'icon'  => '<path d="M9.2 5.8h11v11.6h-11zM20.2 9.6h3.9l3.2 3.6v4.2h-7.1"/><circle cx="12.6" cy="18" r="2.1" fill="#fbf1e2"/><circle cx="23.6" cy="18" r="2.1" fill="#fbf1e2"/><path d="M2.6 8.6h4.4M4.2 12h2.8M2.6 15.4h4.4"/>',
	),
);
?>
<section class="section order-steps" id="how-to-order" aria-labelledby="order-steps-title">
	<div class="container">
		<div class="order-steps__head">
			<div class="order-steps__intro">
				<p class="order-steps__kicker">
					<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 6.6C10.2 5.3 7.8 4.8 3.8 5v13.2c4-.2 6.4.3 8.2 1.6 1.8-1.3 4.2-1.8 8.2-1.6V5c-4-.2-6.4.3-8.2 1.6zM12 6.6v13.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>
					<?php esc_html_e( 'راهنمای خرید عمده', 'duki-kids' ); ?>
				</p>
				<h2 class="order-steps__title" id="order-steps-title"><?php esc_html_e( 'نحوه ثبت سفارش', 'duki-kids' ); ?></h2>
				<p class="order-steps__lead"><?php esc_html_e( 'فرآیند خرید عمده در دوکی ساده و سریع است و تنها در چند مرحله مشخص انجام می‌شود.', 'duki-kids' ); ?></p>
			</div>

			<div class="order-steps__visual" aria-hidden="true">
				<span class="order-steps__leaf order-steps__leaf--a"></span>
				<span class="order-steps__leaf order-steps__leaf--b"></span>
				<span class="order-steps__leaf order-steps__leaf--c"></span>
				<img class="order-steps__mascot" src="<?php echo esc_url( $duki_kids_uri . '/assets/images/order-steps-mascot.png' ); ?>" alt="" width="820" height="423" loading="lazy">
			</div>
		</div>

		<ol class="order-steps__list">
			<?php foreach ( $duki_kids_order_steps as $duki_kids_index => $duki_kids_step ) : ?>
				<li class="order-step">
					<span class="order-step__num" aria-hidden="true"><?php echo esc_html( $duki_kids_index + 1 ); ?></span>
					<span class="order-step__icon" aria-hidden="true">
						<svg viewBox="<?php echo esc_attr( $duki_kids_step['view'] ); ?>" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?php echo $duki_kids_step['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg>
					</span>
					<h3 class="order-step__title"><?php echo esc_html( $duki_kids_step['title'] ); ?></h3>
					<p class="order-step__desc"><?php echo esc_html( $duki_kids_step['desc'][0] ); ?> <br><?php echo esc_html( $duki_kids_step['desc'][1] ); ?></p>
					<?php if ( $duki_kids_index < count( $duki_kids_order_steps ) - 1 ) : ?>
						<span class="order-step__link" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="m10 7.5 4.5 4.5-4.5 4.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ol>

		<div class="order-steps__summary">
			<div class="order-steps__note">
				<h3 class="order-steps__note-title"><?php esc_html_e( 'سفارش عمده در چند قدم ساده', 'duki-kids' ); ?></h3>
				<p class="order-steps__note-text"><?php esc_html_e( 'ابتدا در دوکی ثبت‌نام کنید، اطلاعات فروشگاه خود را تأیید نمایید، سپس مدل‌های موردنظر را انتخاب و پرداخت را تکمیل کنید. در نهایت سفارش شما بسته‌بندی و به‌سرعت ارسال می‌شود.', 'duki-kids' ); ?></p>
				<svg class="order-steps__spark" viewBox="0 0 30 30" fill="none" aria-hidden="true"><path d="M17.5 3.5 20.5 11M4.5 9.5l8 5.5M4 22.5l8.5-1.5" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/></svg>
			</div>

			<div class="order-steps__box" aria-hidden="true">
				<span class="order-steps__leaf order-steps__leaf--d"></span>
				<span class="order-steps__leaf order-steps__leaf--e"></span>
				<img src="<?php echo esc_url( $duki_kids_uri . '/assets/images/order-steps-box.png' ); ?>" alt="" width="640" height="305" loading="lazy">
			</div>

			<div class="order-steps__actions">
				<a class="order-steps__start" href="#account">
					<?php esc_html_e( 'شروع ثبت سفارش', 'duki-kids' ); ?>
					<span class="order-steps__start-icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none"><path d="m14 7.5-4.5 4.5 4.5 4.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</span>
				</a>
				<a class="order-steps__consult" href="#footer">
					<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4.6 14.2V12a7.4 7.4 0 0 1 14.8 0v2.2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><rect x="3.4" y="12.6" width="4" height="6" rx="1.6" stroke="currentColor" stroke-width="1.7"/><rect x="16.6" y="12.6" width="4" height="6" rx="1.6" stroke="currentColor" stroke-width="1.7"/><path d="M18.6 18.6c0 1.5-1.2 2.4-3 2.4h-2.2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
					<?php esc_html_e( 'مشاوره و راهنمایی', 'duki-kids' ); ?>
				</a>
			</div>
		</div>
	</div>
</section>
