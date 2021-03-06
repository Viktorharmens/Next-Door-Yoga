<?php

$post_id = get_the_ID();
$archive = get_queried_object();
$fields = get_field_objects($post_id, true);

get_header();

echo '<div class="container"><div class="content">
<h1 class="title"><span>' . get_the_archive_title() . '</span></h1>';


if ( have_posts() ) { while ( have_posts() ) { the_post();


 
    echo '<div class="card card__docent">';

        echo '<div class="card__image">';
            the_post_thumbnail('full', array('class' => 'js-image-scale'));
        echo '</div>';
        
        echo '<div class="card__text">

            <span class="card__title">' 
                . get_the_title() .
            '</span>
            <a class="btn card__btn" href="' . get_the_permalink() . '">Info</a>

        </div>';

    echo '</div>';    
	
	} // end while
} // end if

echo '</div></div>';

get_footer();

?>