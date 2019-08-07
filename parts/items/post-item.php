<div class="item-post column__1-3 <?php echo (( isset($content['featured']) ) ? 'item-post--featured' : '') ?> <?php echo (( isset($content['class']) ) ? $content['class'] : '') ?>">
	<a href="<?php the_permalink(); ?>">
	
		<figure class="item-post__image">
			<?php 
				
				if( !isset($content['featured']) ) {
					the_featured_image( 'medium', get_the_id(), 'lazyload', true, 'post' ); 
				} else {
					the_featured_image( 'large', get_the_id(), 'lazyload', true, 'post' ); 
				}
				
			?>
		</figure>
		
		<div class="item-post__wrapper">
			
			<div class="item-post__content">

				<h3 class="heading heading--small">
					<?php the_title(); ?>
				</h3>

				<div class="content">
					<?php echo substr( get_field('text', $post->ID), 0, 90) . '...'; ?>
					<span class="js-readmore-handle readmore"><?php _e('Lees nieuwsbericht', 'visualmasters'); ?></span>
				</div>
			</div>

			</a>

			<div class="item-post__footer">
				<span class="category">
					<?php 
					$terms = get_the_term_list( $post->ID, 'categorie');
					$terms = strip_tags( $terms );
					echo $terms; 
					?> 
				</span>
				<span class="price">
					<?php 

						$price = get_field('price');

						if ( $price ) {
							echo '&euro; ' . $price;
						} 
						else {
							echo 'Gratis';
						}
						
					?>
				</span>

			</div>
			
		</div>
		
	

</div>