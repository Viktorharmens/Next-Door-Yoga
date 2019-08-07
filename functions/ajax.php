<?php

    // Get the FAQ list
	add_action( 'wp_ajax_get_faq_list', 'get_faq_list' );
	function get_faq_list() {
		
		$faqs = array();
		
		$args = array('post_type' => 'FAQ',
					  'showposts' => -1);
		
		$query = new WP_Query($args);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			
			$faqs[] = array( 'value' => get_the_id(), 'text' => get_the_title() );
			
		endwhile; endif;
		
		echo json_encode( $faqs );
		
		exit();
	}

	add_action( 'wp_ajax_get_notification_bar_status', 'get_notification_bar_status' );
	add_action( 'wp_ajax_nopriv_get_notification_bar_status', 'get_notification_bar_status' );
	function get_notification_bar_status() {
		
		// Set standard status to hidden
		$status = 'hide';

		// Check if the notification is set to active and if the expiry is empty or not yet expired
		if( get_field('notification_active', 'option') && ( strtotime(get_field('notification_expiry', 'option')) > time() || empty(get_field('notification_expiry', 'option')) ) ) {
			$status = 'show';
		}

		// Return the status and the current message to prevent caching issues
		echo json_encode(array('notification' => get_field('notification_message', 'option'), 'status' => $status));
		exit();
	}