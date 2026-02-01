<section id="featured-work-carousel">
	<div class="container-outer">
		<div class="inner">
			
			<?php if ( have_rows( 'featured_work' ) ) : ?>
				<div class="featured-work">
					<?php while ( have_rows( 'featured_work' ) ) : the_row(); ?>
						
						<div class="featured-item">
							<?php $image = get_sub_field('image'); ?>
							<?php if ($image): ?>
								<picture class="shadow-default">
									<img
										src="<?php echo esc_url($image['url']); ?>"
										alt="<?php echo esc_attr($image['alt']); ?>"
										title="<?php echo esc_attr($image['title']); ?>"
									/>
								</picture>
								<div class="project-details">
									<p>
										<?php if( get_sub_field('project_url') ): ?>
											<a class="project-url" href="<?php echo get_sub_field('project_url') ?>" target="_blank">
												<span><?php the_sub_field('project_name'); ?></span>
											</a>
											<?php if( get_sub_field('project_description') ): ?>
												- <?php the_sub_field('project_description'); ?>
											<?php endif; ?>
										<?php else: ?>
											<span><?php the_sub_field('project_name'); ?></span>
											<?php if( get_sub_field('project_description') ): ?>
												- <?php the_sub_field('project_description'); ?>
											<?php endif; ?>
										<?php endif; ?>
									</p>
								</div>
							<?php endif; ?>
						</div>
						
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>