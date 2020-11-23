<?php

$post_object = get_field('featured');
$postid = $post_object->ID;
$fields = get_field_objects( $postid );

if( $post_object ): 

	// override $post
	$post = $post_object;
    setup_postdata( $post ); 

    // echo "<pre>";
    // print_r($fields);
    // echo "</pre>";

	?>
    <div class="featured">
        <?php

            echo '<figure class="featured__image">';
                the_post_thumbnail('full', array('class' => 'js-image-scale'));
            echo  '</figure>';
            
            echo '<div class="featured__text">
                <h2>' . $post->post_title . '</h2>' .

                 (( $fields['summary']['value'] != null ) ? $fields['summary']['value'] : get_max_excerpt(200)) . '

                <a href="' . get_the_permalink($postid) . '" class="btn">' . __( 'Lees verder', 'ndy' ) . '</a>
            </div>';

        ?>
  
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>