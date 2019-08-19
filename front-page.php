
<?php

get_header();


if ( have_posts() ) : while ( have_posts() ) : the_post(); 

        echo '<div class="container"><div class="column__1-2">';    
        
            the_content();
            the_post_thumbnail('full', array('class' => 'js-scale-image'));


        echo '</div>';
        
        echo '<div class="column__1-2">';
            
            get_template_part('parts/rows/row','agenda');  

        echo '</div></div>';
		
	 endwhile; endif;


get_footer();

?>