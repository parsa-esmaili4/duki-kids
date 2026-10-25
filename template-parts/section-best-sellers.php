<?php
/**
 * Best sellers carousel. Markup stays aligned with #best-sellers in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri       = get_template_directory_uri();
$duki_kids_audiences = duki_kids_product_audiences();

$duki_kids_best_sellers = array(
	array(
		'title'    => __( 'ست بافت دخترانه', 'duki-kids' ),
		'code'     => 'DK-221',
		'audience' => 'girls',
		'colors'   => array( '#e6b3ac', '#f4e9de', '#cdc1de' ),
		'sizes'    => __( '۱ تا ۵ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'product-knit-cardigan-set.jpg',
		'size'     => array( 386, 370 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست سویشرت و شلوار', 'duki-kids' ),
		'code'     => 'DK-309',
		'audience' => 'boys',
		'colors'   => array( '#f3ebe2', '#2d4e7e', '#9eb09b' ),
		'sizes'    => __( '۲ تا ۶ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'product-bear-hoodie-set.jpg',
		'size'     => array( 392, 370 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'پیراهن دخترانه گلدار', 'duki-kids' ),
		'code'     => 'DK-118',
		'audience' => 'girls',
		'colors'   => array( '#e6b4ae', '#f3e6da', '#7d9cc0' ),
		'sizes'    => __( '۳ تا ۷ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'product-floral-dress.jpg',
		'size'     => array( 388, 370 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست بافت خرسی', 'duki-kids' ),
		'code'     => 'DK-245',
		'audience' => 'newborn',
		'colors'   => array( '#ecd3b6', '#b8926d', '#7f9bbb', '#f6f2ec' ),
		'sizes'    => __( '۱ تا ۴ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'product-bear-knit-set.jpg',
		'size'     => array( 390, 370 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست بافت نوزادی', 'duki-kids' ),
		'code'     => 'DK-104',
		'audience' => 'newborn',
		'colors'   => array( '#efe3d2', '#d7c3a6' ),
		'sizes'    => __( '۰ تا ۱۲ ماه', 'duki-kids' ),
		'min'      => __( '۸ عدد', 'duki-kids' ),
		'image'    => 'category-newborn.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست دورس راحتی', 'duki-kids' ),
		'code'     => 'DK-276',
		'audience' => 'girls',
		'colors'   => array( '#f1e6d6', '#dfa9a6' ),
		'sizes'    => __( '۱ تا ۶ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'category-sets.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'کاپشن و کت پشمی', 'duki-kids' ),
		'code'     => 'DK-330',
		'audience' => 'boys',
		'colors'   => array( '#e3cfb3', '#22365a' ),
		'sizes'    => __( '۲ تا ۷ سال', 'duki-kids' ),
		'min'      => __( '۴ عدد', 'duki-kids' ),
		'image'    => 'category-outerwear.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست هودی اسپرت', 'duki-kids' ),
		'code'     => 'DK-312',
		'audience' => 'boys',
		'colors'   => array( '#24395a', '#efe6da', '#f8f3ec' ),
		'sizes'    => __( '۲ تا ۶ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'category-boys.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
);
?>
<section class="section best-sellers" id="best-sellers" aria-labelledby="best-sellers-title">
	<svg class="best-sellers__sprig" viewBox="0 0 300 280" aria-hidden="true">
		<path transform="translate(160 175) rotate(-45)" d="M0 0C-39 -41 -39 -135 0 -188C39 -135 39 -41 0 0z"/>
		<path transform="translate(160 175) rotate(-17)" d="M0 0C-29 -36 -29 -118 0 -164C29 -118 29 -36 0 0z"/>
		<path transform="translate(164 177) rotate(62)" d="M0 0C-22 -26 -22 -85 0 -118C22 -85 22 -26 0 0z"/>
	</svg>

	<div class="container">
		<div class="best-sellers__head">
			<div class="best-sellers__intro">
				<div class="best-sellers__title-wrap">
					<span class="best-sellers__ornament" aria-hidden="true">
						<svg viewBox="0 0 24 18"><path d="M2.6 5.6 7.4 9.4 12 2.6l4.6 6.8 4.8-3.8-1.7 9H4.3l-1.7-9z"/><circle cx="2.6" cy="4.6" r="1.5"/><circle cx="12" cy="1.8" r="1.5"/><circle cx="21.4" cy="4.6" r="1.5"/></svg>
					</span>
					<p class="best-sellers__kicker"><?php esc_html_e( 'محبوب‌ترین انتخاب‌ها', 'duki-kids' ); ?></p>
					<h2 class="best-sellers__title" id="best-sellers-title"><?php esc_html_e( 'محصولات پرفروش', 'duki-kids' ); ?></h2>
				</div>
				<p class="best-sellers__lead"><?php esc_html_e( 'محصولاتی که فروشگاه‌های سراسر کشور بیشترین استقبال را از آن‌ها داشته‌اند.', 'duki-kids' ); ?></p>
			</div>

			<div class="best-sellers__guide" aria-hidden="true">
				<span class="best-sellers__halo"></span>
				<span class="best-sellers__leaf best-sellers__leaf--a"></span>
				<span class="best-sellers__leaf best-sellers__leaf--b"></span>
				<img class="best-sellers__mascot" src="<?php echo esc_url( $duki_kids_uri . '/assets/images/bestsellers-mascot.png' ); ?>" alt="" width="380" height="441" loading="lazy">
				<p class="best-sellers__bubble">
					<img class="best-sellers__crown" src="<?php echo esc_url( $duki_kids_uri . '/assets/images/bestsellers-crown.png' ); ?>" alt="" width="89" height="79" loading="lazy">
					<?php esc_html_e( 'محصولات محبوب', 'duki-kids' ); ?><br><?php esc_html_e( 'فروشگاه‌ها!', 'duki-kids' ); ?>
					<svg class="best-sellers__spark" viewBox="0 0 30 30" fill="none"><path d="M5 17.5 2.5 9.5M11.5 14 13 4M17 20l9-4.5" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/></svg>
				</p>
			</div>
		</div>

		<div class="new-products__carousel best-sellers__carousel" data-carousel>
			<button class="new-products__nav new-products__nav--prev" type="button" data-carousel-prev aria-label="<?php esc_attr_e( 'محصولات قبلی', 'duki-kids' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m9.5 6.5 5.5 5.5-5.5 5.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>

			<ul class="new-products__track" data-carousel-track>
				<?php foreach ( $duki_kids_best_sellers as $duki_kids_product ) : ?>
					<?php $duki_kids_audience = $duki_kids_audiences[ $duki_kids_product['audience'] ]; ?>
					<li class="new-products__slide">
						<article class="product-card">
							<div class="product-card__media">
								<img src="<?php echo esc_url( $duki_kids_uri . '/assets/images/' . $duki_kids_product['image'] ); ?>" alt="<?php echo esc_attr( $duki_kids_product['title'] ); ?>" width="<?php echo esc_attr( $duki_kids_product['size'][0] ); ?>" height="<?php echo esc_attr( $duki_kids_product['size'][1] ); ?>" loading="lazy">
								<span class="product-card__badge product-card__badge--hot">
									<?php esc_html_e( 'پرفروش', 'duki-kids' ); ?>
									<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12.7 2.6c.3 2.7 2 4 3.4 5.7 1.1 1.3 1.8 2.8 1.8 4.6a5.9 5.9 0 0 1-11.8 0c0-2.2.9-3.9 2.4-5.1.1 1.6.8 2.7 1.9 3.3-.5-3.4.6-6.1 2.3-8.5z" fill="currentColor"/><path class="product-card__flame-core" d="M12 13c.9 1 2 1.8 2 3.4a2 2 0 0 1-4 0c0-1.3.8-2.3 2-3.4z"/></svg>
								</span>
								<button class="product-card__fav" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: product name */ __( 'افزودن %s به علاقه‌مندی‌ها', 'duki-kids' ), $duki_kids_product['title'] ) ); ?>">
									<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 19.4s-7.3-4.4-7.3-9.6A4.1 4.1 0 0 1 12 7.3a4.1 4.1 0 0 1 7.3 2.5c0 5.2-7.3 9.6-7.3 9.6z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>
								</button>
							</div>

							<div class="product-card__body">
								<h3 class="product-card__title"><?php echo esc_html( $duki_kids_product['title'] ); ?></h3>
								<p class="product-card__code"><?php esc_html_e( 'کد محصول:', 'duki-kids' ); ?> <span dir="ltr"><?php echo esc_html( $duki_kids_product['code'] ); ?></span></p>

								<div class="product-card__meta">
									<ul class="product-card__colors" aria-label="<?php esc_attr_e( 'رنگ‌بندی', 'duki-kids' ); ?>">
										<?php foreach ( $duki_kids_product['colors'] as $duki_kids_color ) : ?>
											<li class="product-card__swatch" style="--swatch: <?php echo esc_attr( $duki_kids_color ); ?>"></li>
										<?php endforeach; ?>
									</ul>
									<span class="product-card__audience">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $duki_kids_audience['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup from duki_kids_product_audiences(). ?></svg>
										<?php echo esc_html( $duki_kids_audience['label'] ); ?>
									</span>
								</div>

								<ul class="product-card__specs">
									<li class="product-card__spec">
										<span class="product-card__spec-text">
											<span class="product-card__spec-label"><?php esc_html_e( 'سایز بندی', 'duki-kids' ); ?></span>
											<span class="product-card__spec-value"><?php echo esc_html( $duki_kids_product['sizes'] ); ?></span>
										</span>
										<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M8.6 4.4 3.9 6.9l1.9 3.8 2.3-1.1v9.9h7.8V9.6l2.3 1.1 1.9-3.8-4.7-2.5c-.5 1.5-1.8 2.4-3.4 2.4s-2.9-.9-3.4-2.4z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
									</li>
									<li class="product-card__spec">
										<span class="product-card__spec-text">
											<span class="product-card__spec-label"><?php esc_html_e( 'حداقل سفارش', 'duki-kids' ); ?></span>
											<span class="product-card__spec-value"><?php echo esc_html( $duki_kids_product['min'] ); ?></span>
										</span>
										<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3.6 19.6 7.5v9L12 20.4l-7.6-3.9v-9L12 3.6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M4.4 7.5 12 11.4l7.6-3.9M12 11.4v9M8.2 5.5l7.6 3.9" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
									</li>
								</ul>

								<a class="product-card__cta" href="<?php echo esc_url( $duki_kids_product['link'] ); ?>">
									<?php esc_html_e( 'مشاهده جزئیات', 'duki-kids' ); ?>
									<span class="sr-only"><?php echo esc_html( $duki_kids_product['title'] ); ?></span>
									<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5.6 8.4h12.8l-.9 10.9a1.4 1.4 0 0 1-1.4 1.3H7.9a1.4 1.4 0 0 1-1.4-1.3L5.6 8.4z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M9 10.6V7.2a3 3 0 0 1 6 0v3.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
								</a>
							</div>
						</article>
					</li>
				<?php endforeach; ?>
			</ul>

			<button class="new-products__nav new-products__nav--next" type="button" data-carousel-next aria-label="<?php esc_attr_e( 'محصولات بعدی', 'duki-kids' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m14.5 6.5-5.5 5.5 5.5 5.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>

			<div class="new-products__dots best-sellers__dots" data-carousel-dots></div>
		</div>

		<div class="best-sellers__more">
			<a class="button button--line best-sellers__all" href="#best-sellers">
				<?php esc_html_e( 'مشاهده همه محصولات پرفروش', 'duki-kids' ); ?>
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 12H5M5 12l5.5-5.5M5 12l5.5 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</a>
		</div>
	</div>
</section>
