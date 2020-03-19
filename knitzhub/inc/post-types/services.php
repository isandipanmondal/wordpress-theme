<?php
/***
* Services Post Type
***/

if(! class_exists('moneytrain_Services_Post_Type')):
class moneytrain_Services_Post_Type{

	function __construct(){
		// Adds the services post type 
		add_action('init',array(&$this,'services_init'),0);
		// Thumbnail support for services posts
		add_theme_support('post-thumbnails',array('services'));
	}
	

	function services_init(){
		/**
		 * Enable the Services custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Services','moneytrain'),
			'singular_name'		=> __('Services','moneytrain'),
			'add_new'				=> __('Add New','moneytrain'),
			'add_new_item'			=> __('Add New Service','moneytrain'),
			'edit_item'			=> __('Edit Service','moneytrain'),
			'new_item'				=> __('Add New Service','moneytrain'),
			'view_item'			=> __('View Service','moneytrain'),
			'search_items'			=> __('Search Services','moneytrain'),
			'not_found'			=> __('No Services items found','moneytrain'),
			'not_found_in_trash'	=> __('No Services found in trash','moneytrain')
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
			'supports' => array('title','thumbnail','editor','page-attributes','excerpt')
		); 
				

		$args = apply_filters('moneytrain_services_args',$args);
		register_post_type('services',$args);
}
}
new moneytrain_Services_Post_Type;
endif;