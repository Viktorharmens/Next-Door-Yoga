
    
    <footer class="site-footer">
        <div class="container">
            <ul class="site-footer__column site-footer__column--text">
                <li class="column-title">Yogastudio Breda</li>
                <?php echo get_field('footer_text','option');?>
            </ul>
            <ul class="site-footer__column site-footer__column--contact">
                <li class="column-title"><?php _e( 'Contactgegevens', 'ndy' ); ?></li>
                <?php
                
                    $contact = get_field('contact', 'option');	
                    
                    if( $contact ): {
                        echo '<ul class="contact">
                            <li>' . $contact['name'] . '</li>
                            <li><a href="tel:' . $contact['phone'] . '">' . $contact['phone'] . '</a></li>
                            <li><a href="mailto:' . $contact['mail'] . '">' . $contact['mail'] . '</a></li>
                        </ul>';

                    } endif; 
                ?>
            </ul>
            <ul class="site-footer__column site-footer__column--menu">
                <?php wp_nav_menu( array('theme_location' => 'footer_menu', 'container' => '', 'menu_class' => '')); ?>
            </ul>
            <ul class="site-footer__column site-footer__column--newsletter">
                <li class="column-title"><?php _e( 'Nieuwsbrief', 'ndy' ); ?></li>
                <?php 
                echo get_field('newsletter_text','option');
                get_template_part('parts/items/mailchimp','form'); 
                ?>
            </ul>

        </div>

        <div class="container sub-footer">
            &copy; <?php echo date("Y"); ?> Next Door Yoga 
            <?php wp_nav_menu( array('theme_location' => 'subfooter_menu', 'container' => '', 'menu_class' => '')); ?> 
            <li>Fotografie Simone Engelen</li>
        </div>
		
    </footer>
    
</div><!--end of wrapper-->
	

	<?php wp_footer(); ?>
		<script id="__bs_script__">//<![CDATA[
			document.write("<script async src='http://HOST:8000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
		//]]></script>
	</body>
</html>