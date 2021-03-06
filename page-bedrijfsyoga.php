<?php 
/** Template Name: Bedrijfsyoga */
    get_header(); 

        echo '<div class="container container--bedrijfsyoga">';
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();

            global $more;
            $more = 0;

            $benefits = get_field('benefits');
            $banner = get_field('image');
            $fields = get_fields();

            // echo "<pre>";
            // print_r(get_field('role_ndy'));
            // echo "</pre>";

            echo '<h1 class="title">' . get_the_title() . '</h1>

               

                <div class="intro">
                    <div class="intro__item intro__item--left" data-align="left">' . get_field('intro') .  '</div>
                    <div class="intro__item intro__item--right">' . ($banner ? '<img src="' . $banner['url'] . '" alt="' . $banner['alt'] . '" />' : '' ) . '</div>
                </div>

                <div class="intro">
                    <div class="intro__item intro__item--left"><img src="' . $benefits['benefits_image']['sizes']['large'] . '" alt="' . $benefits['benefits_image']['alt'] . '" /></div>
                    <div class="intro__item intro__item--right" data-align="right">' . $benefits['benefits_text'] . '</div>
                </div> 
                
              

                <div class="role">
                    <h2 class="role__title">' . get_field('role_ndy')['title'] . '</h2>
                    <div class="role__columns">
                        <div class="role__column">' . get_field('role_ndy')['column-1'] . '</div>
                        <div class="role__column">' . get_field('role_ndy')['column-2'] . '</div>
                    </div>
                </div>

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