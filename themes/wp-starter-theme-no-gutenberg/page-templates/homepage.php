<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<!-- This loops through flexable content sections. Update 'homepage' if needed -->
<?php if ( have_rows( 'homepage' ) ) : ?>
	<?php while ( have_rows( 'homepage' ) ) : the_row(); ?>

		<!-- Add flexable content sections here -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
