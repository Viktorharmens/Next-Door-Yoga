<?php 
/** Template Name: Zwangerschapsyoga */
    get_header();

    // echo "<pre>";
    // print_r(get_field('pricing'));
    // echo "</pre>";

        echo '<div class="container container--pregnancy">';

        echo '<h1 class="title"><span>' . get_the_title() . '</span></h1>';
        
            echo '<div class="intro"><div class="content intro__column">';
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); 
                       the_content();
                    endwhile; 
                endif;
                echo '</div><div class="image intro__column"><img src=" ' . get_field('intro')['image']['sizes']['large'] . '" alt="' . get_field('intro')['image']['alt'] . '" /></div>
            </div>';

            echo '<div class="">' . get_field('intro_pricing') .  '
            </div>';

            $price = get_field('pricing');
            if($price) {
                echo '<div class="pricing">';

                foreach($price as $pr) {

                    // echo "<pre>";
                    // print_r($pr['link']);
                    // echo "</pre>";

                    echo '<div class="pricing__card">
                    <span class="pricing__content">' . $pr['content'] .'</span>
                    <span class="pricing__price">' . $pr['price'] . '</span>';
                    if ($pr['link']) {
                       echo '<a href="' . $pr['link']['url'] . '" class="btn pricing__btn">' . $pr['link']['title'] . '</a>';
                    }
                    echo '</div>';
                }

                echo '</div>';
            }

            get_template_part('parts/items/review','slider');

            $rows = get_field('images');
            if($rows)
            {
                echo '<div class="images">';
            
                foreach($rows as $row)
                {
                    echo '<figure class="images__item"><img src="' . $row['image']['sizes']['large'] .  '" class="js-image-scale" alt="' . $row['image']['alt'] . '" /></figure>';
                }
        
                echo '</div>';
            }

            echo '<div class="outro">' . get_field('outro') . '</div>';

   
        
        echo '</div>';


	get_footer(); 
?>