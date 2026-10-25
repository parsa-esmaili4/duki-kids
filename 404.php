<?php
/**
 * 404 template.
 *
 * @package Duki_Kids
 */

get_header();
?>
<main id="main" class="section">
	<div class="container">
		<h1><?php esc_html_e( 'صفحه پیدا نشد', 'duki-kids' ); ?></h1>
		<p><?php esc_html_e( 'این آدرس در سایت وجود ندارد.', 'duki-kids' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'بازگشت به خانه', 'duki-kids' ); ?></a>
	</div>
</main>
<?php
get_footer();
