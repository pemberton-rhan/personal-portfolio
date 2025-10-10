<section id="accordion-dropdown">
	<div class="container-outer">
		<div class="inner">
			
			<?php if ( have_rows( 'accordion_items' ) ) : ?>
				<div class="items">
					<?php while ( have_rows( 'accordion_items' ) ) : the_row(); ?>
						
						<div class="item shadow-default">
							<div class="item-title dropdown-trigger">
								<h3><?php the_sub_field('item_title'); ?>
								<?php if( get_sub_field('item_sub_title') ): ?>
								<span> / </span> 
								<span class="smaller"><?php echo get_sub_field('item_sub_title'); ?></span>
								<?php endif; ?>
								</h3>
								<svg xmlns:xlink="http://www.w3.org/1999/xlink" width="46" height="46" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M4.18179 6.18181C4.35753 6.00608 4.64245 6.00608 4.81819 6.18181L7.49999 8.86362L10.1818 6.18181C10.3575 6.00608 10.6424 6.00608 10.8182 6.18181C10.9939 6.35755 10.9939 6.64247 10.8182 6.81821L7.81819 9.81821C7.73379 9.9026 7.61934 9.95001 7.49999 9.95001C7.38064 9.95001 7.26618 9.9026 7.18179 9.81821L4.18179 6.81821C4.00605 6.64247 4.00605 6.35755 4.18179 6.18181Z" fill="#47459b"/>
								</svg>
							</div>
							<div class="item-content">
								<?php the_sub_field('item_content'); ?>
							</div>
						</div>
						
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>