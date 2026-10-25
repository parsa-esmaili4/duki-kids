<?php
/**
 * Newest products carousel. Markup stays aligned with #new-products in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri = get_template_directory_uri();

$duki_kids_audiences = duki_kids_product_audiences();

$duki_kids_products = array(
	array(
		'title'    => __( 'ست بافت دخترانه', 'duki-kids' ),
		'code'     => 'DK-221',
		'audience' => 'girls',
		'badge'    => 'new',
		'colors'   => array( '#e0b4a9', '#f2e6d6', '#c0b6ce' ),
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
		'badge'    => 'new',
		'colors'   => array( '#f5e8db', '#3b536b', '#98a594' ),
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
		'badge'    => 'hot',
		'colors'   => array( '#e1b2a8', '#f2e5d4', '#7d8fa2' ),
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
		'badge'    => 'new',
		'colors'   => array( '#ecd5bd', '#b69170', '#7f909f', '#f8f3ec' ),
		'sizes'    => __( '۱ تا ۴ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'product-bear-knit-set.jpg',
		'size'     => array( 390, 370 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست هودی اسپرت', 'duki-kids' ),
		'code'     => 'DK-312',
		'audience' => 'boys',
		'badge'    => 'new',
		'colors'   => array( '#24395a', '#efe6da', '#f8f3ec' ),
		'sizes'    => __( '۲ تا ۶ سال', 'duki-kids' ),
		'min'      => __( '۶ عدد', 'duki-kids' ),
		'image'    => 'category-boys.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست بافت نوزادی', 'duki-kids' ),
		'code'     => 'DK-104',
		'audience' => 'newborn',
		'badge'    => 'hot',
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
		'badge'    => 'new',
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
		'badge'    => 'new',
		'colors'   => array( '#e3cfb3', '#22365a' ),
		'sizes'    => __( '۲ تا ۷ سال', 'duki-kids' ),
		'min'      => __( '۴ عدد', 'duki-kids' ),
		'image'    => 'category-outerwear.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
	array(
		'title'    => __( 'ست اکسسوری خرسی', 'duki-kids' ),
		'code'     => 'DK-415',
		'audience' => 'newborn',
		'badge'    => 'new',
		'colors'   => array( '#efe3d2', '#2b4268' ),
		'sizes'    => __( 'فری سایز', 'duki-kids' ),
		'min'      => __( '۱۲ عدد', 'duki-kids' ),
		'image'    => 'category-accessories.jpg',
		'size'     => array( 582, 516 ),
		'link'     => '#',
	),
);
?>
<section class="section new-products" id="new-products" aria-labelledby="new-products-title">
	<div class="new-products__decor" aria-hidden="true">
		<span class="new-products__leaf new-products__leaf--a"></span>
		<span class="new-products__leaf new-products__leaf--b"></span>
		<span class="new-products__leaf new-products__leaf--c"></span>
	</div>

	<div class="container">
		<div class="new-products__head">
			<div class="new-products__intro">
				<div class="new-products__title-wrap">
					<span class="new-products__ornament" aria-hidden="true">
						<svg viewBox="0 0 24 16"><path d="M12 2.2c2.3 3 2.3 8.6 0 11.6-2.3-3-2.3-8.6 0-11.6z"/><path transform="rotate(-58 12 13.8)" d="M12 6.4c1.9 2.2 1.9 5.2 0 7.4-1.9-2.2-1.9-5.2 0-7.4z"/><path transform="rotate(58 12 13.8)" d="M12 6.4c1.9 2.2 1.9 5.2 0 7.4-1.9-2.2-1.9-5.2 0-7.4z"/></svg>
					</span>
					<p class="new-products__kicker"><?php esc_html_e( 'محصولات جدید', 'duki-kids' ); ?></p>
					<h2 class="new-products__title" id="new-products-title"><?php esc_html_e( 'جدیدترین محصولات', 'duki-kids' ); ?></h2>
				</div>
				<p class="new-products__lead"><?php esc_html_e( 'جدیدترین طرح‌ها و کالکشن‌های فصل را همین حالا ببینید و انتخاب‌های متنوعی برای فروشگاه خود داشته باشید.', 'duki-kids' ); ?></p>
			</div>
			<a class="button button--line new-products__all" href="#products">
				<?php esc_html_e( 'مشاهده همه محصولات', 'duki-kids' ); ?>
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 12H5M5 12l5.5-5.5M5 12l5.5 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</a>
		</div>

		<div class="new-products__carousel" data-carousel>
			<svg class="new-products__spark" viewBox="0 0 40 24" fill="none" aria-hidden="true"><path d="M6 9.5 11.5 17M18.5 3.5l1.2 11M33 6.5 27.5 15" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/></svg>

			<button class="new-products__nav new-products__nav--prev" type="button" data-carousel-prev aria-label="<?php esc_attr_e( 'محصولات قبلی', 'duki-kids' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m9.5 6.5 5.5 5.5-5.5 5.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>

			<ul class="new-products__track" data-carousel-track>
				<?php foreach ( $duki_kids_products as $duki_kids_product ) : ?>
					<?php $duki_kids_audience = $duki_kids_audiences[ $duki_kids_product['audience'] ]; ?>
					<li class="new-products__slide">
						<article class="product-card">
							<div class="product-card__media">
								<img src="<?php echo esc_url( $duki_kids_uri . '/assets/images/' . $duki_kids_product['image'] ); ?>" alt="<?php echo esc_attr( $duki_kids_product['title'] ); ?>" width="<?php echo esc_attr( $duki_kids_product['size'][0] ); ?>" height="<?php echo esc_attr( $duki_kids_product['size'][1] ); ?>" loading="lazy">
								<?php if ( 'hot' === $duki_kids_product['badge'] ) : ?>
									<span class="product-card__badge product-card__badge--hot">
										<?php esc_html_e( 'پرفروش', 'duki-kids' ); ?>
										<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.2c3.4 4 5.8 7.2 5.8 10.6a5.8 5.8 0 0 1-11.6 0C6.2 10.4 8.6 7.2 12 3.2z" fill="currentColor"/></svg>
									</span>
								<?php else : ?>
									<span class="product-card__badge">
										<?php esc_html_e( 'جدید', 'duki-kids' ); ?>
										<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M10.5 4c.7 4.2 2.4 5.9 6.5 6.5-4.1.7-5.8 2.4-6.5 6.5-.7-4.1-2.4-5.8-6.5-6.5 4.1-.6 5.8-2.3 6.5-6.5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M18 14.6c.3 1.7 1 2.4 2.6 2.7-1.6.3-2.3 1-2.6 2.7-.3-1.7-1-2.4-2.6-2.7 1.6-.3 2.3-1 2.6-2.7z" fill="currentColor"/></svg>
									</span>
								<?php endif; ?>
								<button class="product-card__fav" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: product name */ __( 'افزودن %s به علاقه‌مندی‌ها', 'duki-kids' ), $duki_kids_product['title'] ) ); ?>">
									<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 19.4s-7.3-4.4-7.3-9.6A4.1 4.1 0 0 1 12 7.3a4.1 4.1 0 0 1 7.3 2.5c0 5.2-7.3 9.6-7.3 9.6z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>
								</button>
							</div>

							<div class="product-card__body">
								<h3 class="product-card__title"><?php echo esc_html( $duki_kids_product['title'] ); ?></h3>
								<p class="product-card__code"><?php esc_html_e( 'کد محصول:', 'duki-kids' ); ?> <span dir="ltr"><?php echo esc_html( $duki_kids_product['code'] ); ?></span></p>

								<div class="product-card__meta">
									<span class="product-card__audience">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $duki_kids_audience['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg>
										<?php echo esc_html( $duki_kids_audience['label'] ); ?>
									</span>
									<ul class="product-card__colors" aria-label="<?php esc_attr_e( 'رنگ‌بندی', 'duki-kids' ); ?>">
										<?php foreach ( $duki_kids_product['colors'] as $duki_kids_color ) : ?>
											<li class="product-card__swatch" style="--swatch: <?php echo esc_attr( $duki_kids_color ); ?>"></li>
										<?php endforeach; ?>
									</ul>
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
									<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M2.6 12s3.4-6.2 9.4-6.2 9.4 6.2 9.4 6.2-3.4 6.2-9.4 6.2S2.6 12 2.6 12z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><circle cx="12" cy="12" r="2.7" fill="currentColor"/></svg>
								</a>
							</div>
						</article>
					</li>
				<?php endforeach; ?>
			</ul>

			<button class="new-products__nav new-products__nav--next" type="button" data-carousel-next aria-label="<?php esc_attr_e( 'محصولات بعدی', 'duki-kids' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m14.5 6.5-5.5 5.5 5.5 5.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>

			<div class="new-products__dots" data-carousel-dots></div>
		</div>
	</div>
</section>
