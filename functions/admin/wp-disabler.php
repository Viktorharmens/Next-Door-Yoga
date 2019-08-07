<?php
	
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	
	// Disable admin bar
	add_filter('show_admin_bar', '__return_false');

	// Remove emoji-support
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	
	function remove_admin_menus() {
		if( !current_user_can( 'administrator' ) ) {
			// Disable theme-menu and add menus to the admin panel 
			add_menu_page( 'Menu\'s', 'Menu\'s', 'edit_posts', 'nav-menus.php', null, 'dashicons-menu', 61 );
			remove_menu_page('themes.php');
		}
		
		
		remove_menu_page('edit-comments.php');
		add_submenu_page( 'post.php', 'Reacties', 'Reacties', 'edit_posts', 'edit-comments.php' );
	}
	
	add_action('admin_menu', 'remove_admin_menus'); 

	add_action('in_admin_header', 'vm_hide_acf_fields');
	function vm_hide_acf_fields() {
		global $pagenow;
		global $post;

		if( get_option( 'page_on_front' ) != $_GET['post'] ) {
			echo '<style>
					.acf-flexible-content .layout[data-layout="header-image"] .acf-tab-group li:nth-child(2),
					.acf-flexible-content .layout[data-layout="header-image"] .acf-tab-group li:nth-child(3) {
						display: none !important;
					}
				</style>';
		}
		
		echo '<style>
				.acf-template-pillar-page .acf-fc-popup a[data-layout="header-image"],
				.acf-template-pillar-page .acf-fc-popup a[data-layout="content-sidebar"],
				.acf-template-pillar-page .acf-fc-popup a[data-layout="content-icons"],
				.acf-template-pillar-page .acf-fc-popup a[data-layout="content-blocks"],
				.acf-template-pillar-page .acf-fc-popup a[data-layout="slider-news"],
				.acf-template-pillar-page .acf-fc-popup a[data-layout="slider-team"],
				.acf-template-pillar-page .acf-fc-popup a[data-layout="slider-content"] {
					display: none !important;
				}
			 </style>';
		
		
		echo '<script>
				  $(function() {
					$("#page_template").on("change", function() {
						if( $(this).val() === "page-pillar.php" ) {
							$("body").addClass("acf-template-pillar-page");
						} else {
							$("body").removeClass("acf-template-pillar-page");
						}
					});
					
					if($("#page_template").val() === "page-pillar.php") {
						$("body").addClass("acf-template-pillar-page");
					}
				  });
			  </script>';
		
	}