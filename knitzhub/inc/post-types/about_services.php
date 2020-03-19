<?php
/***
* About_Services Post Type
***/

if(! class_exists('moneytrain_About_Services_Post_Type')):
class moneytrain_About_Services_Post_Type{

	function __construct(){
		// Adds the About_services post type 
		add_action('init',array(&$this,'About_services_init'),0);
		// Thumbnail support for About_services posts
		add_theme_support('post-thumbnails',array('About_services'));
	}
	

	function About_services_init(){
		/**
		 * Enable the About_Services custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('About Services','moneytrain'),
			'singular_name'		=> __('About_Services','moneytrain'),
			'add_new'				=> __('Add New','moneytrain'),
			'add_new_item'			=> __('Add New Service','moneytrain'),
			'edit_item'			=> __('Edit Service','moneytrain'),
			'new_item'				=> __('Add New Service','moneytrain'),
			'view_item'			=> __('View Service','moneytrain'),
			'search_items'			=> __('Search About_Services','moneytrain'),
			'not_found'			=> __('No About_Services items found','moneytrain'),
			'not_found_in_trash'	=> __('No About_Services found in trash','moneytrain')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-clipboard',			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','editor')
		); 
				
		$args = apply_filters('moneytrain_About_services_args',$args);
		
		register_post_type('About_services',$args);
	}
}

new moneytrain_About_Services_Post_Type;
endif;