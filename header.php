<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<?php do_action( 'after_body_tag' ); ?>

        
		<header class="header">

			<div class="container">
				<div class="header__brand">
					<a href="<?php echo apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>"><span><?php echo get_option('blogname'); ?></span></a>
				</div>
				    
				<button class="menu-button js-toggle-nav hide-desktop">
					<span class="icon-nav">
						<i></i>
					</span>
					<span class="label">Menu</span>
				</button>
				
				<nav class="navigation">
					<?php wp_nav_menu( array('theme_location' => 'primary_menu', 'container' => '', 'menu_class' => '', 'depth' => 3, 'walker' => new Mobile_Walker() )); ?>
				</nav>

			</div>
		    		    
		</header>