<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php wp_head(); ?>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56286704-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-56286704-1');
        </script>

    </head>
    <body <?php body_class(); ?>>
		<?php do_action( 'after_body_tag' ); ?>

        
		<header class="header">

			<div class="container">
				<div class="header__brand">
                    <a href="<?php echo apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>">
                        <img src="<?php bloginfo('stylesheet_directory');?>/dist/img/NDY-logo-new.svg" height="auto" width="100%">
                        <span><?php echo get_option('blogname'); ?></span>
                    </a>
				</div>
				    
				<button class="menu-button js-toggle-nav hide-desktop">
					<span class="icon-nav">
						<i></i>
					</span>
					<span class="label">Menu</span>
                    <span class="label label__pre">Sluit</span>
				</button>

                <nav class="top-menu">
                    <?php 
                        echo '<ul class="socials">
                            <li class="socials__icon socials__icon--facebook"><a href="' . get_field('facebook', 'option') . '" target="__blank"></a></li>
                            <li class="socials__icon socials__icon--instagram"><a href="' . get_field('instagram', 'option') . '" target="__blank"></a></li>
                        </ul>';

                        wp_nav_menu( array('theme_location' => 'top_menu', 'container' => '', 'menu_class' => '', 'depth' => 3, 'walker' => new Mobile_Walker() )); 
                    ?>
                </nav>
				
				<nav class="navigation">
                    <?php
                        wp_nav_menu( array('theme_location' => 'primary_menu', 'container' => '', 'menu_class' => '', 'depth' => 3, 'walker' => new Mobile_Walker() ));
                    ?>
                    
				</nav>

			</div>
		    		    
        </header>
        
        <div class="wrapper">