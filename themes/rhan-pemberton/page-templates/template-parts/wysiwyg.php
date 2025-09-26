<section id="wysiwyg">
	<div class="container-outer">
		<div class="inner">
			<?php 
				$wysiwyg_content = get_sub_field( 'wysiwyg_content' );
				if ( $wysiwyg_content ) {
					echo wp_kses_post( $wysiwyg_content );
				}
			?>
		</div>
	</div>
</section>
