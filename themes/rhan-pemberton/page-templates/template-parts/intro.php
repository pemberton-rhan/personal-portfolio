<section id="intro">
	<div class="container-outer">
		<div class="inner">

			<?php 
			$image = get_sub_field( 'headshot' ); 
			if ( $image ) : ?>
				<picture>
					<img
						src="<?php echo esc_url( $image['url'] ); ?>"
						alt="<?php echo esc_attr( $image['alt'] ); ?>"
						title="<?php echo esc_attr( $image['title'] ); ?>"
						loading="lazy"
					/>
				</picture>
			<?php endif; ?>

			<div class="intro-content">
				<?php 
				$content = get_sub_field( 'content' );
				if ( $content ) {
					echo wp_kses_post( $content );
				}
				?>
			</div>

		</div>
	</div>
</section>