
<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
        //
        the_title();
        the_content();
        get_template_part('parts/rows/row','agenda');
		//
	} // end while
} // end if

get_footer();

?>