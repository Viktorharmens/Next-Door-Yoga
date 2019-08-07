<section class="page-row page-row--icons" data-background="<?php echo $content['bgcolor']; ?>" <?php the_row_margins($content); ?> data-midnight="color">
	<div class="container">
		
		<div class="content">
			<?php the_heading( $content['heading'] ); ?>
			<div class="main_text"><?php echo $content['content']; ?></div>
		</div>
		
		<div class="icons">
			<?php
				
				foreach( $content['icons'] as &$icon ) {
					
					echo '<div class="icon column__1-3">';

						$image = wp_get_attachment_image_src( $icon['icon'], 'page-header' );
						$image_alt= get_post_meta( $icon['icon'], '_wp_attachment_image_alt', true);
						$image_name= get_the_title( $icon['icon'] );
					
						echo '<img class="icon__image" src="' . $image[0] . '">';
						echo '<h2 class="icon__title">' . $icon['title'] . '</h2>';
						echo '<span class="icon__text">' . $icon['text'] . '</span>';
							
					echo '</div>';

				}
				
			?>
		</div>
		
	</div>
</section>