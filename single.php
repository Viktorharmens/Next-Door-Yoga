<?php 
    get_header(); 

        echo '<div class="container">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                if (is_single('standaard-rooster')) {
                    echo '<div class="container__image">    
                    <img src="' . get_field('schedule_image', 'option')['sizes']['large'] . '" class="js-image-scale" />
                    </div>';
                } else {
                    echo '<div class="container__image">';    
                    the_post_thumbnail('full', array('class' => 'js-image-scale'));
                    echo '</div>';
                }
 
                echo '<div class="container__content">
                    <h1>' . get_the_title() . '</h1>';
                    the_content();
                    get_template_part('parts/rows/row','agenda');

                echo '</div>';    

            endwhile; endif;
        
        echo '</div>';

	get_footer(); 
?>

