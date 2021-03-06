<?php

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

// echo "<pre>";
// print_r(get_field('button_1'));
// echo "</pre>";

        echo '<div class="container container__full">
        <div class="column__1-2 home">';    
        
            echo '<figure class="home__image">';

                the_post_thumbnail('full', array('class' => 'js-image-scale'));

                echo '<div class="home__text">
                <h1>' . get_the_title() . '</h1>
                <p>' . get_max_excerpt(200) . '</p>
                <a href="' . get_field('button')['url'] . '" class="btn">' . get_field('button')['title'] . '</a>

            </div>';

            echo '</figure>';

            echo '<div class="container container__full container__full--extra">';

                echo '<div class="column__1-2 extra-image">
                <img src="' . get_field('image')['url'] . '" class="js-image-scale" alt="extra afbeelding voor sfeer">
                </div>';

                echo '<div class="column__1-2 slider slider-info">
                    <div class="js-slider">
                        <div class="slide sign-up">'
                            . get_field('text') . '<a href="' . get_field('button_1')['url'] . '" class="btn">' . get_field('button_1')['title'] .  '</a><a href="' . get_field('button_2')['url'] . '" class="btn btn--grey">' . get_field('button_2')['title'] . '</a>
                        </div>

                        <div class="slide usp">' . get_field('usps', 'option') . '</div>
                    </div>
                </div>';


            echo '</div>';
            
            if (ICL_LANGUAGE_CODE =='nl') {
               echo get_template_part('parts/items/review','slider');
            };
            

        echo '</div>';
        
        echo '<div class="column__1-2 home">';
            echo '<div class="schedule"><h2 class="schedule__title">' . get_field('active_schedule', 'option')->post_title . '</h2>';
                get_template_part('parts/rows/row','agenda');
            echo '</div>';
            
            get_template_part('parts/items/post','object');

        echo '</div></div>';
		
	 endwhile; endif;


get_footer();

?>