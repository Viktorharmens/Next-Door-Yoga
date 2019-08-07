<section 
	class="page-row page-row--content-fullwidth"
	data-midnight="color"
	data-background="<?php echo $content['bgcolor']; ?>" 
	<?php the_row_margins($content); ?>
	<?php echo (( !empty($content['anchor']) ) ? 'id="' . sanitize_title($content['anchor']) . '"' : ''); ?>
>
	<div class="container">
		
		<div class="content">
			<?php the_heading( $content['heading'] ); ?>
			<div class="main_text"><?php echo $content['content']; ?></div>
		</div>
		
	</div>
</section>