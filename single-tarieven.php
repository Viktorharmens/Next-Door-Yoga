<?php 
    get_header(); 

        echo '<div class="container single-tarieven">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();

            $link = get_field('link');

                echo '<div class="container__image">';    
                the_post_thumbnail('full', array('class' => 'js-image-scale'));
                echo '</div>';
                
 
                echo '<div class="container__content">
                    <h1>' . get_the_title() . '</h1>';
                    the_content();

                   echo '<div class="text__price">
                    <span>' . 'Prijs: &euro; ' . get_field('price') . ',-' . '</span>
                    <a href="' . $link['url'] . '" class="btn">' . $link['title'] . '</a> 
                    </div>
                    <div class="terms">' . __('Op dit product zijn de <a href="/algemene-voorwaarden">algemene voorwaarden</a> van toepassing.', 'ndy') . '</div>';
                    
                echo '</div>';    

            endwhile; endif;
        
        echo '</div>';

	get_footer(); 
?>