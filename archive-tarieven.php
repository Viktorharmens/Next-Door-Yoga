<?php

// $archive = get_queried_object();
// $fields = get_field_objects($post_id, true);

get_header();


echo '<div class="container"><div class="content">';

global $post;



if ( have_posts() ) { while ( have_posts() ) { the_post();

    $link = get_field('link');

    echo '<div class="card card__archive">';

        echo '<div class="card__image">';
            echo '<span class="price">' . '&euro; ' . get_field('price') . ',-' . '</span>';
            the_post_thumbnail('full', array('class' => 'js-image-scale'));
        echo '</div>';
        
        echo '<div class="card__text">

            <span class="card__title">' 
                . get_the_title() .
            '</span>
            <a class="btn card__btn js-open-modal" href="#">' . _('Bekijk', 'ndy') . '</a>

        </div>';

        echo '<div class="modal">
            <a href="#" class="close-icon js-close-modal">&times;</a>
            <div class="text">
            <h2>' . get_the_title() . '</h2>' . get_the_content() .
            '<div class="text__price">
                <span>' . 'Prijs: &euro; ' . get_field('price') . ',-' . '</span>
                <a href="' . $link['url'] . '" class="btn">' . $link['title'] . '</a> 
            </div>
            
            </div>
        </div>';

    echo '</div>';    
	
	} // end while
} // end if

echo '</div></div>';

get_footer();

?>