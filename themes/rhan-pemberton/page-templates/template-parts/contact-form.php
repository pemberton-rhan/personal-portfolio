<section id="contact-form">
	<div class="container-outer">
		<div class="inner">
			
			<?php if( get_sub_field('form_id') ): ?>
				
				<?php $form_id = get_sub_field('form_id') ?>
				
				<div class="contact-form-wrapper">
					<?php gravity_form( $form_id, false, false, false, '', true, 12 ); ?>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>