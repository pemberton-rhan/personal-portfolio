<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<!-- This loops through flexable content sections. Update 'homepage' if needed -->
<?php if ( have_rows( 'homepage' ) ) : ?>
	<?php while ( have_rows( 'homepage' ) ) : the_row(); ?>

		<!-- Intro -->
		<?php if( get_row_layout() == 'intro' ): ?>
			<?php get_template_part( 'page-templates/template-parts/intro' ); ?>
		<?php endif; ?>
		
		<!-- WYSIWYG -->
		<?php if( get_row_layout() == 'wysiwyg' ): ?>
			<?php get_template_part( 'page-templates/template-parts/wysiwyg' ); ?>
		<?php endif; ?>
		
		<!-- Logo Carousel -->
		<?php if( get_row_layout() == 'logo_carousel' ): ?>
			<?php get_template_part( 'page-templates/template-parts/logo-carousel' ); ?>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
