<?php
/***
* mission_sliders Post Type
***/

if(! class_exists('moneytrain_mission_sliders_Post_Type')):
class moneytrain_mission_sliders_Post_Type{

	function __construct(){
		// Adds the mission_sliders post type and taxonomies
		add_action('init',array(&$this,'mission_sliders_init'),0);
		// Thumbnail support for mission_sliders posts
		add_theme_support('post-thumbnails',array('mission_sliders'));
	}

	function mission_sliders_init(){
		/**
		 * Enable the mission_sliders_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Mission sliders','moneytrain'),
			'singular_name'		=> __('Slider Name','moneytrain'),
			'add_new'				=> __('Add New','moneytrain'),
			'add_new_item'			=> __('Add New Slider','moneytrain'),
			'edit_item'			=> __('Edit Slider','moneytrain'),
			'new_item'				=> __('Add New Slider','moneytrain'),
			'view_item'			=> __('View Slider','moneytrain'),
			'search_items'			=> __('Search mission_sliders','moneytrain'),
			'not_found'			=> __('No mission_sliders items found','moneytrain'),
			'not_found_in_trash'	=> __('No mission_sliders found in trash','moneytrain')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-images-alt2',
			'rewrite' => true,			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','thumbnail')
		); 
		
		$args = apply_filters('moneytrain_mission_sliders_args',$args);
		register_post_type('mission_sliders',$args);
	}
}
new moneytrain_mission_sliders_Post_Type;
endif;