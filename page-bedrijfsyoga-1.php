<?php 
/** Template Name: Bedrijfsyoga-1 */
    get_header(); 

        echo '<div class="container">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();

            global $more;
            $more = 0;

            $benefits = get_field('benefits');
            $banner = get_field('image');
            $fields = get_fields();

            echo '<div class="container container--color"><div class="title box--small"><h1>' . get_the_title() . '</h1>

                <h2>' . get_field('subtitle') . '</h2></div></div>

                <div class="selling-points">
                    <div class="left">' . ($banner ? '<img src="' . $banner['url'] . '" alt="' . $banner['alt'] . '" class="js-image-scale" />' : '' ) . '</div>
                    <div class="right">' . get_field('did_you_know') . '</div>
                </div>

                <div class="intro box--small">' . get_field('intro') . '</div>

                <div class="benefits">
                    <div class="left">' . $benefits['benefits_text'] . '</div>
                    <div class="right"><img src="' . $benefits['benefits_image']['sizes']['large'] . '" alt="' . $benefits['benefits_image']['alt'] . '" /></div>
                </div> 
                

                <div class="role box--small">' . get_field('role_ndy') . '</div>

                <div class="themes" id="themas">';

                // check if the repeater field has rows of data
                if( have_rows('themes') ):

                // loop through the rows of data
                while ( have_rows('themes') ) : the_row();

                echo '<div class="theme card">
                    <h3 class="title">' . get_sub_field('theme_title') . '</h3>
                    <h4 class="subtitle">' . get_sub_field('theme_subtitle') . '</h4>
                    <div class="content">' . get_sub_field('theme_text') . '</div>
                    <div class="image"><img src="' . get_sub_field('theme_image')['sizes']['medium'] . '" alt="' . get_sub_field('theme_image')['alt']  . '" /></div>
                    <a href="' . get_sub_field('theme_button')['url'] . '" class="btn">' . get_sub_field('theme_button')['title'] . '</a>
                </div>';

                endwhile;

                else : endif;

                echo '</div><div class="container"><div class="custom box--small">' . get_field('custom_theme') . '</div></div>';

            endwhile; endif;

            get_template_part('parts/items/review','slider');

            get_template_part('parts/rows/row','slider');
        
        echo '</div>';


	get_footer(); 
?>