<section 
	class="page-row page-row--columns" 
	data-midnight="color"
	data-background="<?php echo $content['bgcolor']; ?>" 
	<?php the_row_margins($content); ?>
	<?php echo (( !empty($content['anchor']) ) ? 'id="' . sanitize_title($content['anchor']) . '"' : ''); ?>
>
	<div class="container <?php echo (( get_page_template_slug() == 'page-pillar.php' ) ? 'container--slim' : '') ?>">
		
		<div class="column content">
			<?php the_heading( $content['heading_left'] ); ?>
			<?php echo $content['content_left']; ?>
		</div>
		
		<div class="column content ">
			<?php the_heading( $content['heading_right'] ); ?>
			 
			<?php	
			// WP_Query arguments
				$args = array (
					'post_type'              => array( 'faq' ),
					'order'                  => 'ASC',
					'orderby'                => 'menu_order',
				);

				// The Query
				$faq = new WP_Query( $args );

				echo '<div class="faqs">';

				// The Loop
				if ( $faq->have_posts() ) {
					while ( $faq->have_posts() ) {
						$faq->the_post();

						$title = get_the_title();
						$content = get_the_content();
						
						
							echo '<ul class="faq">';
								echo '<li class="faq__title js-handle-faq">' . $title . '</li>';
								echo '<li class="faq__content">' . $content . '</li>';
							echo '</ul>';
						

					}
				} else {
					// no posts found
				}

				echo '</div>';

				// Restore original Post Data
				wp_reset_postdata();
			?>
		</div>
		
	</div>
</section>