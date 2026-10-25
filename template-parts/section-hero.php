<?php
/**
 * Hero. Markup stays aligned with #hero in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri = get_template_directory_uri();
?>
<section class="hero" id="hero" aria-labelledby="hero-title">
	<div class="hero__decor" aria-hidden="true">
		<span class="hero__arch hero__arch--side"></span>
		<span class="hero__arch hero__arch--main"></span>
		<span class="hero__leaf hero__leaf--a"></span>
		<span class="hero__leaf hero__leaf--b"></span>
	</div>
	<div class="container hero__grid">
		<div class="hero__content">
			<div class="hero__copy">
				<p class="hero__kicker"><span lang="en">DUKI WHOLESALE KIDSWEAR</span></p>
				<h1 class="hero__title" id="hero-title">
					<span class="hero__title-line"><?php esc_html_e( 'مرجع تخصصی', 'duki-kids' ); ?></span>
					<span class="hero__title-line"><?php esc_html_e( 'فروش عمده لباس کودک', 'duki-kids' ); ?></span>
				</h1>
				<p class="hero__lead"><?php esc_html_e( 'با دوکی، جدیدترین و باکیفیت‌ترین لباس‌های کودک را با قیمت همکاری دریافت کنید. انتخابی مطمئن برای فروشگاه‌ها و بوتیک‌های کودک در سراسر ایران.', 'duki-kids' ); ?></p>
				<div class="hero__actions">
					<a class="button button--solid" href="#products">
						<?php esc_html_e( 'مشاهده محصولات', 'duki-kids' ); ?>
						<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 12H5M5 12l5.5-5.5M5 12l5.5 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
					<a class="button button--line" href="#partnership">
						<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="2.15" stroke="currentColor" stroke-width="1.7"/><circle cx="16.1" cy="8.7" r="1.7" stroke="currentColor" stroke-width="1.7"/><path d="M3.8 18.4c.7-2.6 2.5-4 4.3-4s3.5 1.3 4.2 3.7" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="M13.1 16.4c.55-.7 1.5-1.15 2.6-1.15 1.55 0 2.8 1.05 3.4 2.8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
						<?php esc_html_e( 'درخواست همکاری', 'duki-kids' ); ?>
					</a>
				</div>
			</div>
			<ul class="hero__perks">
				<li class="hero__perk">
					<span class="hero__perk-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M12.4 4.6h6.1V11l-7.6 7.6a1.5 1.5 0 0 1-2.1 0l-4.1-4.1a1.5 1.5 0 0 1 0-2.1l7.7-7.8z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><circle cx="15.7" cy="8" r="1" fill="currentColor"/></svg></span>
					<span class="hero__perk-title"><?php esc_html_e( 'قیمت همکاری', 'duki-kids' ); ?></span>
					<span class="hero__perk-text"><?php esc_html_e( 'ویژه فروشگاه‌ها و همکاران', 'duki-kids' ); ?></span>
				</li>
				<li class="hero__perk">
					<span class="hero__perk-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M12 4.6 19.6 8.5 12 12.4 4.4 8.5 12 4.6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M4.4 12.1 12 16l7.6-3.9M4.4 15.4 12 19.3l7.6-3.9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
					<span class="hero__perk-title"><?php esc_html_e( 'تنوع بالا', 'duki-kids' ); ?></span>
					<span class="hero__perk-text"><?php esc_html_e( 'به‌روز و مطابق ترندها', 'duki-kids' ); ?></span>
				</li>
				<li class="hero__perk">
					<span class="hero__perk-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M3.6 7.6h10v8.2h-10V7.6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M13.6 10.2h3.3l2.3 2.5v3.1h-5.6v-5.6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><circle cx="7.2" cy="17.5" r="1.45" stroke="currentColor" stroke-width="1.6"/><circle cx="16.5" cy="17.5" r="1.45" stroke="currentColor" stroke-width="1.6"/></svg></span>
					<span class="hero__perk-title"><?php esc_html_e( 'ارسال سریع', 'duki-kids' ); ?></span>
					<span class="hero__perk-text"><?php esc_html_e( 'به سراسر کشور', 'duki-kids' ); ?></span>
				</li>
			</ul>
		</div>
		<div class="hero__visual">
			<img class="hero__kids" src="<?php echo esc_url( $duki_kids_uri . '/assets/images/hero-trio.png' ); ?>" alt="<?php esc_attr_e( 'کودکان در کنار شخصیت دوکی', 'duki-kids' ); ?>" width="819" height="614" fetchpriority="high">
		</div>
	</div>
</section>
