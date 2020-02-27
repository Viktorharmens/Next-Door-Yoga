<?php
	
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) exit; 
	
	
	// Enable featured images
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'large-image-header', 1600, 680, true ); 
	add_image_size( 'image-header', 1400, 500, true ); 
	add_image_size( 'large-column', 600, 800, true ); 
	add_image_size( 'post-image', 400, 250, true ); 
	
	// Remove Gutenberg by default
	add_filter('use_block_editor_for_post', '__return_false', 10);
	
	// Register navigation
	function setup_navs() {
	    register_nav_menus( array(
	        'primary_menu' => 'Primaire navigatie',
	        'footer_menu' => 'Footer menu',
            'subfooter_menu' => 'Subfooter menu',
            'top_menu' => 'Top menu',
	    ) );
	}
	add_action( 'after_setup_theme', 'setup_navs' );
	
	
	
	// Setup option pages
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Thema instellingen',
			'menu_title'	=> 'Site opties',
			'redirect'		=> false,
			'position' 		=> 2,
			'icon_url'		=> 'dashicons-feedback'
		));
	}
	
	
	// Enqueue scripts
	function enqueue_scripts_styles() {
		global $wp_scripts;
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/dist/css/styles.css', null, THEME_VERSION );
		wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Montserrat|Merriweather:300,400,700', false ); 
		
		wp_deregister_script('wp-embed');
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
        wp_enqueue_script('jquery', null, null, false);
        

		wp_enqueue_script("plugins", get_stylesheet_directory_uri() . '/dist/js/vendor.js', null, THEME_VERSION, true);
        wp_enqueue_script("scripts", get_stylesheet_directory_uri() . '/dist/js/scripts.js', null, THEME_VERSION, true);
        
		
		// Initialize Google Maps
		if( function_exists('get_field') && get_field('googlemaps_apikey', 'option') ) {
			wp_enqueue_script('google_maps', '//maps.googleapis.com/maps/api/js?libraries=places&key=' . get_field('googlemaps_apikey', 'option') . '&callback=initializeMap', null, null, true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts_styles' );
	
	
	
	// Set the Google API Key for ACF
	if( function_exists('get_field') && get_field('googlemaps_apikey', 'option') ) {
		add_filter('acf/settings/google_api_key', function () {
		    return get_field('googlemaps_apikey', 'option');
		});
	}
	
	
	
	// Include the ajaxurl
	add_action( 'wp_head', function() {
		echo PHP_EOL.'<script>var ajaxurl = "' . admin_url('admin-ajax.php') . '";</script>';
    });
    

?>
