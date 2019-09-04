    <div class="modal">
        <a href="#" class="close-icon js-close-modal">&times;</a>
        <div class="text">
            
        </div>
    </div>
    
    <footer class="site-footer">
        <div class="container">
            <ul class="site-footer__column">
                <li class="column-title">Yogastudio Breda</li>
                <?php echo get_field('footer_text','option');?>
            </ul>
            <ul class="site-footer__column">
                <li class="column-title">Contactgegevens</li>
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
            <ul class="site-footer__column">
                <li class="column-title">Nieuwsbrief</li>
                <?php echo get_field('newsletter_text','option');?>
            </ul>

        </div>

        <div class="container sub-footer">
            &copy; <?php echo date("Y"); ?> Next Door Yoga | Disclaimer | Privacy | Fotografie Simone Engelen
        </div>
		
	</footer>
	

	<?php wp_footer(); ?>
		<script id="__bs_script__">//<![CDATA[
			document.write("<script async src='http://HOST:8000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
		//]]></script>
	</body>
</html>