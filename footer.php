
    
    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__column site-footer__column--text">
                <ul>
                    <li class="column-title">Yogastudio Breda</li>
                    <li><?php echo get_field('footer_text','option');?></li>
                </ul>
            </div>
            <div class="site-footer__column site-footer__column--contact">
                <ul>
                <li class="column-title"><?php _e( 'Contactgegevens', 'ndy' ); ?></li>
                </ul>
                <?php
                
                    $contact = get_field('contact', 'option');
                    $stripped = str_replace(' ', '', $contact['phone']);	
                    
                    if( $contact ): {
                        echo '<ul class="contact">
                            <li>' . $contact['name'] . '</li>
                            <li><a href="tel:' . $stripped . '">' . $contact['phone'] . '</a></li>
                            <li><a href="mailto:' . $contact['mail'] . '">' . $contact['mail'] . '</a></li>
                        </ul>';

                    } endif; 
                ?>
                
            </div>
            <div class="site-footer__column site-footer__column--menu">
                <?php wp_nav_menu( array('theme_location' => 'footer_menu', 'container' => '', 'menu_class' => '')); ?>
            </div>
            <div class="site-footer__column site-footer__column--newsletter">
                <div>
                    <span class="column-title"><?php _e( 'Nieuwsbrief', 'ndy' ); ?></span>
                    <?php 
                    echo get_field('newsletter_text','option');
                    get_template_part('parts/items/mailchimp','form'); 
                    ?>
                </div>
            </div>

        </div>

        <div class="container sub-footer">
            &copy; <?php echo date("Y"); ?> Next Door Yoga 
            <?php wp_nav_menu( array('theme_location' => 'subfooter_menu', 'container' => '', 'menu_class' => '')); ?> 
            <span>Fotografie Simone Engelen</span>
        </div>
		
    </footer>
    
</div><!--end of wrapper-->
	

	<?php wp_footer(); ?>

	</body>
</html>