<?php
	
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	
	// Get the theme settings
	$active_theme = wp_get_theme();
    define( 'THEME_VERSION', $active_theme->get('Version') );
    
    error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	
	
	// Disablers and cleanup
	include_once 'functions/admin/auto-update.php';
	include_once 'functions/admin/wp-disabler.php';
	include_once 'functions/admin/wp-backend.php';
	include_once 'functions/admin/admin.php';
	
	// Include main function files
	include_once 'functions/acf.php';
	include_once 'functions/theme.php';
	include_once 'functions/functions.php';
	include_once 'functions/customposts.php';
	include_once 'functions/shortcodes.php';
	include_once 'functions/ajax.php';
	include_once 'functions/walker.php';
	
	
	
	// External vendor includes
	if( !function_exists('include_field_types_Gravity_Forms') ) {
		include_once 'functions/vendor/gravityforms-acf-population/acf-gravity_forms.php';
    }

?>