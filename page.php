<?php 
    get_header(); 

        echo '<div class="container">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                echo '<div class="container__image">';    
                the_post_thumbnail('full', array('class' => 'js-image-scale'));
                echo '</div>';
        
                echo '<div class="container__content">';

                    echo '<h1>' . get_the_title() . '</h1>';
                    the_content();
                    $rows = get_field('faq');
                    if($rows)
                    {
                        echo '<ul class="faq-section">';
            
                        foreach($rows as $row)
                        {
                            echo '<li class="faq"><span class="question">' . $row['question'] . '</span><span class="answer">' . $row['answer'] .'</span></li>';
                        }
            
                        echo '</ul>';
                    }
 
                
                echo '</div>'; 

            endwhile; endif;
        
        echo '</div>';


	get_footer(); 
?>
