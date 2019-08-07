<?php
	
	add_shortcode( 'button', function( $params ) {
		
		return '<div class="btn-container">
					<a href="' . $params['link'] . '" class="btn ' . (( !empty($params['color']) ) ? 'btn--' . $params['color'] : '' ) . ' ' . (( isset($params['class']) ) ? $params['class'] : '') . '" ' . (( !empty( $params['target'] ) ) ? 'target="' . $params['target'] . '"' : '') . '>' . $params['label'] . '</a>
				</div>';
		
	});

	
	add_shortcode( 'faq', function( $params ) {
        
        $content =  '<div class="accordion accordion--module">';
        
        if( have_rows('faq', $params['id']) ): while( have_rows('faq', $params['id']) ): the_row();
            
            $content .= '<div class="accordion__row">
                            <a href="#" class="accordion__title js-toggle-accordion-content">' . get_sub_field('question') . '</a>
                            <div class="accordion__content">' . get_sub_field('answer') . '</div>
                         </div>';
            
        endwhile; endif;
            
        $content .=    '</div>';
        
        return $content;
        
    });
?>