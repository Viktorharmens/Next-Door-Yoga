<?php 
    get_header(); 
    
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            echo '<div class="container">';

                the_post_thumbnail();
                the_content();

            echo '</div>';
        
        get_template_part('parts/rows/row','agenda');
  
	endwhile; endif;

	get_footer(); 
?>

