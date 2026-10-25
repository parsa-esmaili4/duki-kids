<?php
/**
 * Newest collections bento. Markup stays aligned with #collections in index.html.
 *
 * @package Duki_Kids
 */

$duki_kids_uri = get_template_directory_uri();

$duki_kids_collection_badges = array(
	'loved' => array(
		'label' => __( 'پرفروش', 'duki-kids' ),
		'icon'  => '<path d="M12 20.2s-7.8-4.7-7.8-10.3A4.4 4.4 0 0 1 12 7.3a4.4 4.4 0 0 1 7.8 2.6c0 5.6-7.8 10.3-7.8 10.3z" fill="currentColor"/>',
	),
	'hot'   => array(
		'label' => __( 'پرفروش', 'duki-kids' ),
		'icon'  => '<path d="M12.7 2.6c.3 2.7 2 4 3.4 5.7 1.1 1.3 1.8 2.8 1.8 4.6a5.9 5.9 0 0 1-11.8 0c0-2.2.9-3.9 2.4-5.1.1 1.6.8 2.7 1.9 3.3-.5-3.4.6-6.1 2.3-8.5z" fill="currentColor"/><path class="collection-card__flame-core" d="M12 13c.9 1 2 1.8 2 3.4a2 2 0 0 1-4 0c0-1.3.8-2.3 2-3.4z"/>',
	),
	'new'   => array(
		'label' => __( 'جدید', 'duki-kids' ),
		'icon'  => '<path d="m12 3.4 2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8L12 3.4z" fill="currentColor" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>',
	),
);

$duki_kids_collections = array(
	'autumn'  => array(
		'title'   => __( 'کالکشن پاییزه', 'duki-kids' ),
		'lines'   => array( __( 'مدل‌های گرم و شیک برای', 'duki-kids' ), __( 'فصل جدید', 'duki-kids' ) ),
		'count'   => '',
		'badge'   => 'new',
		'image'   => 'collection-autumn.jpg',
		'size'    => array( 1024, 768 ),
		'focus'   => 'center',
		'variant' => 'feature',
		'link'    => '#',
	),
	'newborn' => array(
		'title'   => __( 'کالکشن نوزادی', 'duki-kids' ),
		'lines'   => array( __( 'مدل‌های لطیف و دوست‌داشتنی', 'duki-kids' ), __( 'برای شروع یک دنیای زیبا', 'duki-kids' ) ),
		'count'   => __( 'بیش از ۱۲۰ مدل', 'duki-kids' ),
		'badge'   => 'loved',
		'image'   => 'collection-newborn.jpg',
		'size'    => array( 1024, 768 ),
		'focus'   => '40% center',
		'variant' => 'wide',
		'link'    => '#',
	),
	'comfort' => array(
		'title'   => __( 'کالکشن راحتی', 'duki-kids' ),
		'lines'   => array( __( 'مدل‌های پرفروش و کاربردی', 'duki-kids' ), __( 'برای هر روز', 'duki-kids' ) ),
		'count'   => '',
		'badge'   => 'hot',
		'image'   => 'collection-comfort.jpg',
		'size'    => array( 1024, 768 ),
		'focus'   => '42% center',
		'variant' => 'compact',
		'link'    => '#',
	),
	'party'   => array(
		'title'   => __( 'کالکشن مهمانی', 'duki-kids' ),
		'lines'   => array( __( 'مدل‌های خاص و شیک', 'duki-kids' ), __( 'مناسب ویترین فروشگاه‌ها', 'duki-kids' ) ),
		'count'   => '',
		'badge'   => 'new',
		'image'   => 'collection-party.jpg',
		'size'    => array( 1024, 768 ),
		'focus'   => '18% center',
		'variant' => 'compact',
		'link'    => '#',
	),
);

$duki_kids_collection_perks = array(
	array(
		'title' => __( 'مناسب فروشگاه‌ها', 'duki-kids' ),
		'text'  => __( 'انتخابی ایده‌آل برای عمده‌فروشان', 'duki-kids' ),
		'icon'  => '<path d="M5 10.4V19a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-8.6"/><path d="M4.2 4h15.6l1.4 4.1a2.5 2.5 0 0 1-4.6 1.6 2.6 2.6 0 0 1-4.6 0 2.6 2.6 0 0 1-4.6 0 2.5 2.5 0 0 1-4.6-1.6L4.2 4z"/><path d="M9.6 20v-4.6h4.8V20"/>',
	),
	array(
		'title' => __( 'مدل‌های به‌روز', 'duki-kids' ),
		'text'  => __( 'همگام با ترندهای روز', 'duki-kids' ),
		'icon'  => '<path d="M12 3.6 19.6 7.5v9L12 20.4l-7.6-3.9v-9L12 3.6z"/><path d="M4.4 7.5 12 11.4l7.6-3.9M12 11.4v9"/>',
	),
	array(
		'title' => __( 'آماده سفارش عمده', 'duki-kids' ),
		'text'  => __( 'تأمین سریع و مطمئن', 'duki-kids' ),
		'icon'  => '<path d="M3.6 7.6h10v8.2h-10V7.6z"/><path d="M13.6 10.2h3.3l2.3 2.5v3.1h-5.6v-5.6z"/><circle cx="7.2" cy="17.5" r="1.45"/><circle cx="16.5" cy="17.5" r="1.45"/>',
	),
);

$duki_kids_collection_card = static function ( $collection ) use ( $duki_kids_uri, $duki_kids_collection_badges ) {
	$badge = $duki_kids_collection_badges[ $collection['badge'] ];
	?>
	<article class="collection-card collection-card--<?php echo esc_attr( $collection['variant'] ); ?>" style="--media-pos: <?php echo esc_attr( $collection['focus'] ); ?>">
		<div class="collection-card__media">
			<img src="<?php echo esc_url( $duki_kids_uri . '/assets/images/' . $collection['image'] ); ?>" alt="<?php echo esc_attr( $collection['title'] ); ?>" width="<?php echo esc_attr( $collection['size'][0] ); ?>" height="<?php echo esc_attr( $collection['size'][1] ); ?>" loading="lazy">
		</div>
		<?php if ( 'wide' === $collection['variant'] ) : ?>
			<svg class="collection-card__spark" viewBox="0 0 24 30" fill="none" aria-hidden="true"><path d="M4 18 18.5 3.5M6.5 27l13.5-1.6" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/></svg>
		<?php endif; ?>
		<div class="collection-card__body">
			<span class="collection-card__badge collection-card__badge--<?php echo esc_attr( $collection['badge'] ); ?>">
				<svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $badge['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg>
				<?php echo esc_html( $badge['label'] ); ?>
			</span>
			<div class="collection-card__text">
				<h3 class="collection-card__title"><?php echo esc_html( $collection['title'] ); ?></h3>
				<p class="collection-card__desc"><?php echo implode( '<br>', array_map( 'esc_html', $collection['lines'] ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- each line is escaped. ?></p>
				<?php if ( $collection['count'] ) : ?>
					<p class="collection-card__count"><?php echo esc_html( $collection['count'] ); ?></p>
				<?php endif; ?>
			</div>
			<a class="collection-card__action" href="<?php echo esc_url( $collection['link'] ); ?>">
				<?php esc_html_e( 'مشاهده کالکشن', 'duki-kids' ); ?>
				<span class="sr-only"><?php echo esc_html( $collection['title'] ); ?></span>
				<span class="collection-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m10 7.5 4.5 4.5-4.5 4.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
			</a>
		</div>
	</article>
	<?php
};
?>
<section class="section collections" id="collections" aria-labelledby="collections-title">
	<div class="container">
		<div class="collections__layout">
			<svg class="collections__sprig" viewBox="0 0 300 280" aria-hidden="true">
				<path transform="translate(160 175) rotate(-45)" d="M0 0C-39 -41 -39 -135 0 -188C39 -135 39 -41 0 0z"/>
				<path transform="translate(160 175) rotate(-17)" d="M0 0C-29 -36 -29 -118 0 -164C29 -118 29 -36 0 0z"/>
				<path transform="translate(158 177) rotate(-65)" d="M0 0C-31 -29 -31 -96 0 -133C31 -96 31 -29 0 0z"/>
				<path transform="translate(162 175) rotate(62)" d="M0 0C-20 -15 -20 -49 0 -68C20 -49 20 -15 0 0z"/>
				<path transform="translate(164 177) rotate(81)" d="M0 0C-22 -26 -22 -85 0 -118C22 -85 22 -26 0 0z"/>
				<path transform="translate(102 266) rotate(-41)" d="M0 0C-23 -26 -23 -84 0 -116C23 -84 23 -26 0 0z"/>
				<path transform="translate(102 268) rotate(-65)" d="M0 0C-18 -17 -18 -55 0 -77C18 -55 18 -17 0 0z"/>
			</svg>

			<div class="collections__main">
				<div class="collections__head">
					<div class="collections__title-wrap">
						<span class="collections__ornament" aria-hidden="true">
							<svg viewBox="0 0 24 16"><path d="M12 2.2c2.3 3 2.3 8.6 0 11.6-2.3-3-2.3-8.6 0-11.6z"/><path transform="rotate(-58 12 13.8)" d="M12 6.4c1.9 2.2 1.9 5.2 0 7.4-1.9-2.2-1.9-5.2 0-7.4z"/><path transform="rotate(58 12 13.8)" d="M12 6.4c1.9 2.2 1.9 5.2 0 7.4-1.9-2.2-1.9-5.2 0-7.4z"/></svg>
						</span>
						<h2 class="collections__title" id="collections-title"><?php esc_html_e( 'جدیدترین کالکشن‌ها', 'duki-kids' ); ?></h2>
					</div>
					<p class="collections__lead"><?php esc_html_e( 'جدیدترین کالکشن‌های فصل را برای فروشگاه خود سریع‌تر بررسی کنید.', 'duki-kids' ); ?></p>
					<a class="collections__all" href="#collections">
						<?php esc_html_e( 'مشاهده همه کالکشن‌ها', 'duki-kids' ); ?>
						<span class="collections__all-arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m10 7.5 4.5 4.5-4.5 4.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
					</a>
				</div>
				<?php $duki_kids_collection_card( $duki_kids_collections['autumn'] ); ?>
			</div>

			<div class="collections__side">
				<?php $duki_kids_collection_card( $duki_kids_collections['newborn'] ); ?>
				<div class="collections__pair">
					<?php $duki_kids_collection_card( $duki_kids_collections['comfort'] ); ?>
					<?php $duki_kids_collection_card( $duki_kids_collections['party'] ); ?>
				</div>
			</div>
		</div>

		<ul class="collections__perks">
			<?php foreach ( $duki_kids_collection_perks as $duki_kids_perk ) : ?>
				<li class="collections__perk">
					<span class="collections__perk-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $duki_kids_perk['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG markup defined above. ?></svg></span>
					<span class="collections__perk-copy">
						<span class="collections__perk-title"><?php echo esc_html( $duki_kids_perk['title'] ); ?></span>
						<span class="collections__perk-text"><?php echo esc_html( $duki_kids_perk['text'] ); ?></span>
					</span>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
