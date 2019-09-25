<?php

// $archive = get_queried_object();
// $fields = get_field_objects($post_id, true);

get_header();


echo '<div class="container">';

global $post;



if ( have_posts() ) { while ( have_posts() ) { the_post();

    echo '<div class="card card__archive column__1-3">';

        echo '<div class="card__image">';
            echo '<span class="price">' . '&euro; ' . get_field('price') . ',-' . '</span>';
            the_post_thumbnail('full', array('class' => 'js-image-scale'));
        echo '</div>';
        
        echo '<div class="card__text">

            <span class="card__title">' 
                . get_the_title() .
            '</span>
            <a class="btn card__btn js-open-modal" href="#">Bekijk</a>

        </div>';

        echo '<div class="modal">';
        echo '<a href="#" class="close-icon js-close-modal">&times;</a>';
        echo '<div class="text">
        <h2>' . get_the_title() . '</h2>' . get_the_content() .
        '<div class="text__price"><span>' . '&euro; ' . get_field('price') . ',-' . '</span></div>' .
        '</div>
    </div>';

    echo '</div>';    
	
	} // end while
} // end if

echo '</div>';

get_footer();

?>