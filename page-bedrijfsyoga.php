<?php 
/** Template Name: Bedrijfsyoga */
    get_header(); 

        echo '<div class="container">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();

            $benefits = get_field('benefits');
            $banner = get_field('image');
            $fields = get_fields();

            // echo "<pre>";
            // print_r($fields);
            // echo "</pre>";

            echo '<div class="title box--small"><h1>' . get_the_title() . '</h1>

                <h2>' . get_field('subtitle') . '</h2></div>

                <div class="selling-points">
                    <div class="left">' . ($banner ? '<img src="' . $banner['url'] . '" class="js-image-scale" />' : '' ) . '</div>
                    <div class="right">' . get_field('did_you_know') . '</div>
                </div>

                <div class="intro box--small">' . get_field('intro') . '</div>

                <div class="benefits">
                    <div class="left">' . $benefits['benefits_text'] . '</div>
                    <div class="right"><img src="' . $benefits['benefits_image']['sizes']['large'] . '" /></div>
                </div> 
                

                <div class="role box--small">' . get_field('role_ndy') . '</div>

                <div class="themes">';

                // check if the repeater field has rows of data
                if( have_rows('themes') ):

                // loop through the rows of data
                while ( have_rows('themes') ) : the_row();

                echo '<div class="theme card">
                    <h3 class="title">' . get_sub_field('theme_title') . '</h3>
                    <h4 class="subtitle">' . get_sub_field('theme_subtitle') . '</h4>
                    <div class="content">' . get_sub_field('theme_text') . '</div>
                    <div class="image"><img src="' . get_sub_field('theme_image')['sizes']['medium'] . '" /></div>
                    <a href="' . get_sub_field('theme_button')['url'] . '" class="btn">' . get_sub_field('theme_button')['title'] . '</a>
                </div>';

                endwhile;

                else : endif;

                echo '</div><div class="custom box--small">' . get_field('custom_theme') . '</div>';

            endwhile; endif;
        
        echo '</div>';


	get_footer(); 
?>