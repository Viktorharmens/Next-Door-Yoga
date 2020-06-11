<?php 
/** Template Name: Zwangerschapsyoga */
    get_header();

    // echo "<pre>";
    // print_r(get_field('images'));
    // echo "</pre>";

        echo '<div class="container container--pregnancy">';

        echo '<h1 class="title"><span>' . get_the_title() . '</span></h1>';
        
            echo '<div class="intro">
                <div class="content intro__column">' . get_field('intro')['content'] . '</div>
                <div class="image intro__column"><img src=" ' . get_field('intro')['image']['sizes']['large'] . '" /></div>
            </div>';

            get_template_part('parts/items/review','slider');

            $rows = get_field('images');
            if($rows)
            {
                echo '<div class="images">';
            
                foreach($rows as $row)
                {
                    echo '<figure class="images__item"><img src="' . $row['image']['sizes']['large'] .  '" class="js-image-scale" /></figure>';
                }
            
                echo '</div>';
            }

            echo '<div class="outro">' . get_field('outro') . '</div>';

   
        
        echo '</div>';


	get_footer(); 
?>