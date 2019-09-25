<?php 
    get_header(); 

        echo '<div class="container">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();


            endwhile; endif;
        
        echo '</div>';


	get_footer(); 
?>
