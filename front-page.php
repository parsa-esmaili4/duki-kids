<?php
/**
 * Landing page. Section order matches index.html.
 *
 * @package Duki_Kids
 */

get_header();
?>
<main id="main">
	<?php
	get_template_part( 'template-parts/section', 'hero' );
	get_template_part( 'template-parts/section', 'categories' );
	get_template_part( 'template-parts/section', 'new-products' );
	get_template_part( 'template-parts/section', 'collections' );
	get_template_part( 'template-parts/section', 'best-sellers' );
	get_template_part( 'template-parts/section', 'order-steps' );
	?>
</main>
<?php
get_footer();
