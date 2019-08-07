<?php

	// register custom post type
	function docent() {
	
	  // labels of custom post type ( show on admin page )
	  $labels = array(
		'name' => _x( 'Docenten', 'Docenten Algemene Naam' ),
		'singular' => _x( 'Docent', 'Docent enkelvoud' ),
		'add_new' => _( 'Nieuwe Docent' ),
		'add_new_item' => _( 'Nieuwe Docent toevoegen' ),
		'edit_item' => _( 'Docent wijzigen' ),
		'new_item' => _( 'Nieuwe Docent' ),
		'view_item' => _( 'Docent bekijken' ),
		'view_items' => _( 'Docenten bekijken' ),
		'search_items' => _( 'Zoek Docent' ),
		'not_found' => _( 'Docent niet gevonden' ),
		'not_found_in_trash' => _( 'Geen Docent gevonden in de prullenbak.' ),
		'parent_item_colon' => _( 'Hoofd Docent' ),
		'all_items' => _( 'Alle Docenten' ),
		'archives' => _( 'Docenten archief' ),
		'attributes' => _( 'Docenten attributen' ),
		// 'insert_into_item' => '',
		// 'uploaded_to_this_item' => '',
		'featured_image' => _( 'Docent afbeelding' ),
		'set_featured_image' => _( 'Afbeelding toevoegen' ),
		'remove_featured_image' => _( 'Afbeelding verwijderen' ),
		'use_featured_image' => _( 'Afbeelding gebruiken' ),
		'menu_name' => 'Docenten',
		// 'filter_items_list' => '',
		// 'items_list_navigation' => '',
		// 'items_list' => '',
		'name_admin_bar' => 'Docenten',
	  );
	
	  // custom post type settings
	  $args = array(
		'labels' => $labels,
		// 'description' => '',
		// 'labels' => '',
		'public' => true,
		// 'exclude_from_search' => '',
		// 'publicly_queryable' => '',
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-groups',
		// 'capability_type' => '',
		// 'capabilities' => '',
		// 'map_meta_cap' => '',
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		// 'register_meta_box_cb' => '',
		// 'taxonomies' => '',
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'docenten', 'with_front' => false ),
		// 'permalink_epmask' => '',
		// 'query_var' => true,
		// 'can_export' => '',
		// 'delete_with_user' => '',
		// 'show_in_rest' => '',
		// 'rest_base' => '',
		// 'rest_controller_class' => '',
	  );
	
	  register_post_type( 'docent', $args );
	
	}
	
	add_action( 'init', 'docent' );
	
	// register custom post type
	function agenda() {
	
	  // labels of custom post type ( show on admin page )
	  $labels = array(
		'name' => _x( 'Rooster', 'Rooster Algemene Naam' ),
		'singular' => _x( 'Rooster', 'Rooster enkelvoud' ),
		'add_new' => _( 'Nieuwe Rooster' ),
		'add_new_item' => _( 'Nieuwe Rooster toevoegen' ),
		'edit_item' => _( 'Rooster wijzigen' ),
		'new_item' => _( 'Nieuwe Rooster' ),
		'view_item' => _( 'Rooster bekijken' ),
		'view_items' => _( 'Rooster bekijken' ),
		'search_items' => _( 'Zoek Rooster' ),
		'not_found' => _( 'Rooster niet gevonden' ),
		'not_found_in_trash' => _( 'Geen Rooster gevonden in de prullenbak.' ),
		'parent_item_colon' => _( 'Hoofd Rooster' ),
		'all_items' => _( 'Alle lessen' ),
		'archives' => _( 'Rooster archief' ),
		'attributes' => _( 'Rooster attributen' ),
		// 'insert_into_item' => '',
		// 'uploaded_to_this_item' => '',
		'featured_image' => _( 'Rooster afbeelding' ),
		'set_featured_image' => _( 'Afbeelding toevoegen' ),
		'remove_featured_image' => _( 'Afbeelding verwijderen' ),
		'use_featured_image' => _( 'Afbeelding gebruiken' ),
		'menu_name' => 'Rooster',
		// 'filter_items_list' => '',
		// 'items_list_navigation' => '',
		// 'items_list' => '',
		'name_admin_bar' => 'Rooster',
	  );
	
	  // custom post type settings
	  $args = array(
		'labels' => $labels,
		// 'description' => '',
		// 'labels' => '',
		'public' => true,
		// 'exclude_from_search' => '',
		// 'publicly_queryable' => '',
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-star-filled',
		// 'capability_type' => '',
		// 'capabilities' => '',
		// 'map_meta_cap' => '',
		'hierarchical' => false,
		'supports' => array( 'title', 'thumbnail' ),
		// 'register_meta_box_cb' => '',
		// 'taxonomies' => '',
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'rooster', 'with_front' => false ),
		// 'permalink_epmask' => '',
		// 'query_var' => true,
		// 'can_export' => '',
		// 'delete_with_user' => '',
		// 'show_in_rest' => '',
		// 'rest_base' => '',
		// 'rest_controller_class' => '',
	  );
	
	  register_post_type( 'agenda', $args );
	
	}
	
	add_action( 'init', 'agenda' );
	
	// register custom post type
	function stijlen() {
	
	  // labels of custom post type ( show on admin page )
	  $labels = array(
		'name' => _x( 'stijlen', 'stijlen Algemene Naam' ),
		'singular' => _x( 'stijl', 'stijl enkelvoud' ),
		'add_new' => _( 'Nieuw stijl' ),
		'add_new_item' => _( 'Nieuw stijl toevoegen' ),
		'edit_item' => _( 'stijl wijzigen' ),
		'new_item' => _( 'Nieuw stijl' ),
		'view_item' => _( 'stijl bekijken' ),
		'view_items' => _( 'stijlen bekijken' ),
		'search_items' => _( 'Zoek stijl' ),
		'not_found' => _( 'stijl niet gevonden' ),
		'not_found_in_trash' => _( 'Geen stijl gevonden in de prullenbak.' ),
		'parent_item_colon' => _( 'Hoofd stijl' ),
		'all_items' => _( 'Alle stijlen' ),
		'archives' => _( 'stijlen archief' ),
		'attributes' => _( 'stijlen attributen' ),
		// 'insert_into_item' => '',
		// 'uploaded_to_this_item' => '',
		'featured_image' => _( 'Stijl afbeelding' ),
		'set_featured_image' => _( 'Afbeelding toevoegen' ),
		'remove_featured_image' => _( 'Afbeelding verwijderen' ),
		'use_featured_image' => _( 'Afbeelding gebruiken' ),
		'menu_name' => 'Stijlen',
		// 'filter_items_list' => '',
		// 'items_list_navigation' => '',
		// 'items_list' => '',
		'name_admin_bar' => 'Stijlen',
	  );
	
	  // custom post type settings
	  $args = array(
		'labels' => $labels,
		// 'description' => '',
		// 'labels' => '',
		'public' => true,
		// 'exclude_from_search' => '',
		// 'publicly_queryable' => '',
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-settings',
		// 'capability_type' => '',
		// 'capabilities' => '',
		// 'map_meta_cap' => '',
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		// 'register_meta_box_cb' => '',
		// 'taxonomies' => '',
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'stijlen', 'with_front' => false ),
		// 'permalink_epmask' => '',
		// 'query_var' => true,
		// 'can_export' => '',
		// 'delete_with_user' => '',
		// 'show_in_rest' => '',
		// 'rest_base' => '',
		// 'rest_controller_class' => '',
	  );
	
	  register_post_type( 'stijlen', $args );
	
	}
	
	add_action( 'init', 'stijlen' );
	
	// register custom post type
	function tarieven() {
	
	  // labels of custom post type ( show on admin page )
	  $labels = array(
		'name' => _x( 'tarieven', 'Tarieven Algemene Naam' ),
		'singular' => _x( 'tarief', 'tarief enkelvoud' ),
		'add_new' => _( 'Nieuw tarief' ),
		'add_new_item' => _( 'Nieuw tarief toevoegen' ),
		'edit_item' => _( 'tarief wijzigen' ),
		'new_item' => _( 'Nieuw tarief' ),
		'view_item' => _( 'tarief bekijken' ),
		'view_items' => _( 'tarieven bekijken' ),
		'search_items' => _( 'Zoek tarief' ),
		'not_found' => _( 'tarief niet gevonden' ),
		'not_found_in_trash' => _( 'Geen tarief gevonden in de prullenbak.' ),
		'parent_item_colon' => _( 'Hoofd tarief' ),
		'all_items' => _( 'Alle tarieven' ),
		'archives' => _( 'tarieven archief' ),
		'attributes' => _( 'tarieven attributen' ),
		// 'insert_into_item' => '',
		// 'uploaded_to_this_item' => '',
		'featured_image' => _( 'tarief afbeelding' ),
		'set_featured_image' => _( 'Afbeelding toevoegen' ),
		'remove_featured_image' => _( 'Afbeelding verwijderen' ),
		'use_featured_image' => _( 'Afbeelding gebruiken' ),
		'menu_name' => 'Tarieven',
		// 'filter_items_list' => '',
		// 'items_list_navigation' => '',
		// 'items_list' => '',
		'name_admin_bar' => 'Tarieven',
	  );
	
	  // custom post type settings
	  $args = array(
		'labels' => $labels,
		// 'description' => '',
		// 'labels' => '',
		'public' => true,
		// 'exclude_from_search' => '',
		// 'publicly_queryable' => '',
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-tickets-alt',
		// 'capability_type' => '',
		// 'capabilities' => '',
		// 'map_meta_cap' => '',
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		// 'register_meta_box_cb' => '',
		// 'taxonomies' => '',
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'tarieven', 'with_front' => false ),
		// 'permalink_epmask' => '',
		// 'query_var' => true,
		// 'can_export' => '',
		// 'delete_with_user' => '',
		// 'show_in_rest' => '',
		// 'rest_base' => '',
		// 'rest_controller_class' => '',
	  );
	
	  register_post_type( 'tarieven', $args );
	
	}
	
	add_action( 'init', 'tarieven' );

	// register custom post type
	function workshop() {

		// labels of custom post type ( show on admin page )
		$labels = array(
			'name' => _x( 'Workshops', 'Workshops Algemene Naam' ),
			'singular' => _x( 'Workshop', 'workshop enkelvoud' ),
			'add_new' => _( 'Nieuwe workshop' ),
			'add_new_item' => _( 'Nieuwe workshop toevoegen' ),
			'edit_item' => _( 'Workshop wijzigen' ),
			'new_item' => _( 'Nieuwe workshop' ),
			'view_item' => _( 'Workshop bekijken' ),
			'view_items' => _( 'Workshops bekijken' ),
			'search_items' => _( 'Zoek workshop' ),
			'not_found' => _( 'Workshop niet gevonden' ),
			'not_found_in_trash' => _( 'Geen workshop gevonden in de prullenbak.' ),
			'parent_item_colon' => _( 'Hoofd workshop' ),
			'all_items' => _( 'Alle workshops' ),
			'archives' => _( 'Workshops archief' ),
			'attributes' => _( 'Workshops attributen' ),
			// 'insert_into_item' => '',
			// 'uploaded_to_this_item' => '',
			'featured_image' => _( 'Workshop afbeelding' ),
			'set_featured_image' => _( 'Afbeelding toevoegen' ),
			'remove_featured_image' => _( 'Afbeelding verwijderen' ),
			'use_featured_image' => _( 'Afbeelding gebruiken' ),
			'menu_name' => 'Worskhops',
			// 'filter_items_list' => '',
			// 'items_list_navigation' => '',
			// 'items_list' => '',
			'name_admin_bar' => 'Workshops',
		);
		
		// custom post type settings
		$args = array(
			'labels' => $labels,
			// 'description' => '',
			// 'labels' => '',
			'public' => true,
			// 'exclude_from_search' => '',
			// 'publicly_queryable' => '',
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 6,
			'menu_icon' => 'dashicons-welcome-learn-more',
			// 'capability_type' => '',
			// 'capabilities' => '',
			// 'map_meta_cap' => '',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			// 'register_meta_box_cb' => '',
			// 'taxonomies' => '',
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'Workshops', 'with_front' => false ),
			// 'permalink_epmask' => '',
			// 'query_var' => true,
			// 'can_export' => '',
			// 'delete_with_user' => '',
			// 'show_in_rest' => '',
			// 'rest_base' => '',
			// 'rest_controller_class' => '',
		);
		
		register_post_type( 'workshop', $args );
		
		}
		
		add_action( 'init', 'workshop' );