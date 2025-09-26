<section id="logo-carousel">
	<div class="container-outer">
		<div class="inner">
			<div class="logos">
				<?php if ( have_rows( 'logos' ) ) : ?>
					<?php while ( have_rows( 'logos' ) ) : the_row(); ?>
						<?php 
						$svg = get_sub_field( 'logo' );
						if ( $svg && isset( $svg['url'], $svg['alt'], $svg['title'] ) ) : ?>
							<picture>
								<img
									src="<?php echo esc_url( $svg['url'] ); ?>"
									alt="<?php echo esc_attr( $svg['alt'] ); ?>"
									title="<?php echo esc_attr( $svg['title'] ); ?>"
									loading="lazy"
								/>
							</picture>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
