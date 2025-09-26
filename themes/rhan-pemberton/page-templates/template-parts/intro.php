<section id="intro">
	<div class="container-outer">
		<div class="inner">
			
			<picture>
				<?php $image = get_sub_field('headshot'); ?>
				<?php if ($image): ?>
					<img
						src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>"
						title="<?php echo esc_attr($image['title']); ?>"
						description="<?php echo esc_attr($image['description']); ?>"
					/>
				<?php endif; ?>
			</picture>
			
			<div class="intro-content">
				<?php the_sub_field('content') ?>
			</div>
			
		</div>
	</div>
</section>