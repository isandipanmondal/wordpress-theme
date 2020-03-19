<?php
/***
* sliders Post Type
***/

if(! class_exists('moneytrain_Sliders_Post_Type')):
class moneytrain_Sliders_Post_Type{

	function __construct(){
		// Adds the sliders post type and taxonomies
		add_action('init',array(&$this,'sliders_init'),0);
		// Thumbnail support for sliders posts
		add_theme_support('post-thumbnails',array('Sliders'));
	}

	function sliders_init(){
		/**
		 * Enable the sliders_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Sliders','moneytrain'),
			'singular_name'		=> __('Slider Name','moneytrain'),
			'add_new'				=> __('Add New','moneytrain'),
			'add_new_item'			=> __('Add New Slider','moneytrain'),
			'edit_item'			=> __('Edit Slider','moneytrain'),
			'new_item'				=> __('Add New Slider','moneytrain'),
			'view_item'			=> __('View Slider','moneytrain'),
			'search_items'			=> __('Search sliders','moneytrain'),
			'not_found'			=> __('No sliders items found','moneytrain'),
			'not_found_in_trash'	=> __('No sliders found in trash','moneytrain')
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
			'supports' => array('title','editor','thumbnail','page-attributes')
		); 
		



		$args = apply_filters('moneytrain_sliders_args',$args);
		register_post_type('sliders',$args);
		// Add new taxonomy,NOT hierarchical(like tags)
		$labels_one = array(
			'name'                       => _x('slider Types','taxonomy general name'),
			'singular_name'              => _x('slider Type','taxonomy singular name'),
			'search_items'               => __('Search slider Types'),
			'popular_items'              => __('Popular slider Types'),
			'all_items'                  => __('All slider Types'),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __('Edit slider Type'),
			'update_item'                => __('Update slider Type'),
			'add_new_item'               => __('Add New slider Type'),
			'new_item_name'              => __('New slider Type Name'),
			'separate_items_with_commas' => __('Separate slider types with commas'),
			'add_or_remove_items'        => __('Add or remove slider types'),
			'choose_from_most_used'      => __('Choose from the most used slider types'),
			'not_found'                  => __('No slider types found.'),
			'menu_name'                  => __('slider Types'),
		);
	
		$args_one = array(
			'hierarchical'          => true,
			'labels'                => $labels_one,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array('slug' => 'slider_type'),
		);
	
		register_taxonomy('slider_type','sliders',$args_one);		
	}
}
new moneytrain_Sliders_Post_Type;
endif;