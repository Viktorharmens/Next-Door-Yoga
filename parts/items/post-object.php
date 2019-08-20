<?php

$post_object = get_field('featured');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
    <div class="featured">
        <?php

            echo '<figure class="featured__image">';
                the_post_thumbnail('full', array('class' => 'js-image-scale'));
            echo  '</figure>';
            
            echo '<div class="featured__text">
                <h1>' . $post->post_title . '</h1>' .
                '<p>' . get_max_excerpt(200) . '</p>
                <a href="' . $post->guid . '"><button class="btn">Lees verder</button></a>
            </div>';

        ?>
  
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>