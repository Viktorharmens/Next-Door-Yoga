<section class="page-row page-row--header-img">


	<figure class="header-image <?php echo (is_front_page() ? 'header-image--home' : '' ); ?>">
		<?php
			
			$image = wp_get_attachment_image_src( $content['image'], 'page-header' );
			$image_alt = get_post_meta( $content['image'], '_wp_attachment_image_alt', true);
			$image_name = get_the_title( $content['image'] );
			
		?>
		<img src="<?php echo $image[0]; ?>" class="js-image-scale" title="<?php echo $image_name; ?>" alt="<?php echo $image_alt; ?>"  />

	</figure>


	<div class="header-content <?php echo (is_front_page() ? 'header-content--home' : '' ); ?>">

			
		<figure class="header-textimage">

			<?php
			
			$image_head = wp_get_attachment_image_src( $content['image_textblock'], 'page-header' );
			$image_alt_head = get_post_meta( $content['image_textblock'], '_wp_attachment_image_alt', true);
			$image_name_head = get_the_title( $content['image_textblock'] );
			
			?>
			<img src="<?php echo $image_head[0]; ?>" class="js-image-scale" title="<?php echo $image_name_head; ?>" alt="<?php echo $image_alt_head; ?>"  />
			
		</figure>

		
		<?php

			// Home content
			echo (( ( !empty( $content["text"] ) ) ) ? '<div class="home_text">' . $content["text"] . '</div>' : '');

			// CTA Link
			$link = $content["button"];
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self'; ?>
				
				<a class="btn btn__header" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
		
		<?php 
			endif;
		?>


	</div>




	
</section>


