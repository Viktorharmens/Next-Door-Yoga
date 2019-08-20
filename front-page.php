
<?php

get_header();


if ( have_posts() ) : while ( have_posts() ) : the_post(); 

        echo '<div class="container container__full"><div class="column__1-2 home">';    
        


            echo '<figure class="home__image">';

                the_post_thumbnail('full', array('class' => 'js-image-scale'));

                echo '<div class="home__text">
                <h1>' . get_the_title() . '</h1>
                <p>' . get_max_excerpt(200) . '</p>
                <button class="btn">Lees verder</button>

            </div>';

            echo '</figure>';

            echo '<div class="container container__full container__full--extra">';

                echo '<div class="column__1-2 extra-image">
                <img src="' . get_field('image')['url'] . '" class="js-image-scale">
                </div>';

                echo '<div class="column__1-2 sign-up"><div class="sign-up__text">'
                    . get_field('text') . '<button class="btn">aanmelden</button><button class="btn btn--grey">tarieven</button>
                </div></div>';

            echo '</div>';    

        echo '</div>';
        
        echo '<div class="column__1-2 home">';
            echo '<div class="schedule"><h2 class="schedule__title">Rooster</h2>';
                get_template_part('parts/rows/row','agenda');
            echo '</div>';
            
            get_template_part('parts/items/post','object');

        echo '</div></div>';
		
	 endwhile; endif;


get_footer();

?>