<?php
/**
 * Product categories. Markup stays aligned with #products in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri = get_template_directory_uri();

$duki_kids_categories = array(
	array(
		'title' => __( 'لباس دخترانه', 'duki-kids' ),
		'count' => __( 'بیش از ۲۲۰ مدل', 'duki-kids' ),
		'image' => 'category-girls.jpg',
		'link'  => '#',
		'badge' => 'hot',
	),
	array(
		'title' => __( 'لباس پسرانه', 'duki-kids' ),
		'count' => __( 'بیش از ۱۸۰ مدل', 'duki-kids' ),
		'image' => 'category-boys.jpg',
		'link'  => '#',
		'badge' => '',
	),
	array(
		'title' => __( 'نوزادی', 'duki-kids' ),
		'count' => __( 'بیش از ۲۰۰ مدل', 'duki-kids' ),
		'image' => 'category-newborn.jpg',
		'link'  => '#',
		'badge' => 'loved',
	),
	array(
		'title' => __( 'ست‌های راحتی', 'duki-kids' ),
		'count' => __( 'بیش از ۱۶۰ مدل', 'duki-kids' ),
		'image' => 'category-sets.jpg',
		'link'  => '#',
		'badge' => '',
	),
	array(
		'title' => __( 'لباس بیرونی', 'duki-kids' ),
		'count' => __( 'بیش از ۱۲۰ مدل', 'duki-kids' ),
		'image' => 'category-outerwear.jpg',
		'link'  => '#',
		'badge' => '',
	),
	array(
		'title' => __( 'اکسسوری کودک', 'duki-kids' ),
		'count' => __( 'بیش از ۱۵۰ مدل', 'duki-kids' ),
		'image' => 'category-accessories.jpg',
		'link'  => '#',
		'badge' => '',
	),
);
?>
<section class="section categories" id="products" aria-labelledby="categories-title">
	<div class="container">
		<div class="categories__head">
			<div class="categories__intro">
				<div class="categories__title-wrap">
					<span class="categories__ornament" aria-hidden="true">
						<svg viewBox="0 0 24 16"><path d="M12 2.2c2.3 3 2.3 8.6 0 11.6-2.3-3-2.3-8.6 0-11.6z"/><path transform="rotate(-58 12 13.8)" d="M12 6.4c1.9 2.2 1.9 5.2 0 7.4-1.9-2.2-1.9-5.2 0-7.4z"/><path transform="rotate(58 12 13.8)" d="M12 6.4c1.9 2.2 1.9 5.2 0 7.4-1.9-2.2-1.9-5.2 0-7.4z"/></svg>
					</span>
					<h2 class="categories__title" id="categories-title"><?php esc_html_e( 'دسته‌بندی محصولات', 'duki-kids' ); ?></h2>
				</div>
				<p class="categories__lead"><?php esc_html_e( 'برای مشاهده سریع‌تر مدل‌ها، دسته‌بندی موردنظر خود را انتخاب کنید.', 'duki-kids' ); ?></p>
			</div>

			<div class="categories__guide" aria-hidden="true">
				<span class="categories__leaf categories__leaf--a"></span>
				<span class="categories__leaf categories__leaf--b"></span>
				<span class="categories__leaf categories__leaf--c"></span>
				<img class="categories__mascot" src="<?php echo esc_url( $duki_kids_uri . '/assets/images/categories-mascot.png' ); ?>" alt="" width="420" height="430" loading="lazy">
				<p class="categories__bubble"><?php esc_html_e( 'دسته مورد علاقه‌تون', 'duki-kids' ); ?><br><?php esc_html_e( 'رو پیدا کنید!', 'duki-kids' ); ?></p>
				<svg class="categories__spark" viewBox="0 0 24 30" fill="none"><path d="M5 11.5 17.5 4.5M6 20.5l13.5 1.5" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/></svg>
			</div>
		</div>

		<ul class="categories__grid">
			<?php foreach ( $duki_kids_categories as $duki_kids_category ) : ?>
				<li>
					<a class="category-card<?php echo 'hot' === $duki_kids_category['badge'] ? ' category-card--featured' : ''; ?>" href="<?php echo esc_url( $duki_kids_category['link'] ); ?>">
						<span class="category-card__body">
							<?php if ( 'hot' === $duki_kids_category['badge'] ) : ?>
								<span class="category-card__badge category-card__badge--hot">
									<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12.7 2.6c.3 2.7 2 4 3.4 5.7 1.1 1.3 1.8 2.8 1.8 4.6a5.9 5.9 0 0 1-11.8 0c0-2.2.9-3.9 2.4-5.1.1 1.6.8 2.7 1.9 3.3-.5-3.4.6-6.1 2.3-8.5z" fill="currentColor"/><path class="category-card__flame-core" d="M12 13c.9 1 2 1.8 2 3.4a2 2 0 0 1-4 0c0-1.3.8-2.3 2-3.4z"/></svg>
									<?php esc_html_e( 'پرفروش', 'duki-kids' ); ?>
								</span>
							<?php elseif ( 'loved' === $duki_kids_category['badge'] ) : ?>
								<span class="category-card__badge category-card__badge--loved">
									<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20.2s-7.8-4.7-7.8-10.3A4.4 4.4 0 0 1 12 7.3a4.4 4.4 0 0 1 7.8 2.6c0 5.6-7.8 10.3-7.8 10.3z" fill="currentColor"/></svg>
									<?php esc_html_e( 'محبوب', 'duki-kids' ); ?>
								</span>
							<?php endif; ?>
							<span class="category-card__title"><?php echo esc_html( $duki_kids_category['title'] ); ?></span>
							<span class="category-card__count"><?php echo esc_html( $duki_kids_category['count'] ); ?></span>
							<span class="category-card__action">
								<?php esc_html_e( 'مشاهده', 'duki-kids' ); ?>
								<span class="category-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m10 7.5 4.5 4.5-4.5 4.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
							</span>
						</span>
						<span class="category-card__media">
							<img src="<?php echo esc_url( $duki_kids_uri . '/assets/images/' . $duki_kids_category['image'] ); ?>" alt="" width="582" height="516" loading="lazy">
						</span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
