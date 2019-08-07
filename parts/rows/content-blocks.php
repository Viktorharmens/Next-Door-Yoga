<section class="page-row page-row--blocks" data-midnight="color">
	<div class="container">	
		
		<?php

			$args = array('post_type' => 'program',
						'showposts' => -1);

			$query = new WP_Query($args);
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
				
				$block = array('postid' => get_the_id());
				get_page_part( 'items', 'post-item', $block );
				
			endwhile; endif; wp_reset_query();

			echo '</div>';
		
				
		?>
		
	</div>
</section>