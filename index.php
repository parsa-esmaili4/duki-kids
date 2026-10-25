<?php
/**
 * Fallback template.
 *
 * @package Duki_Kids
 */

get_header();
?>
<main id="main" class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e( 'محتوایی پیدا نشد.', 'duki-kids' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
