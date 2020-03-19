<?php
/***
* recent_works Post Type
***/

if(! class_exists('arc_recent_works_Post_Type')):
class arc_recent_works_Post_Type{

	function __construct(){
		// Adds the recent_works post type and taxonomies
		add_action('init',array(&$this,'recent_works_init'),0);
		// Thumbnail support for recent_works posts
		add_theme_support('post-thumbnails',array('recent_works'));
	}

	function recent_works_init(){
		/**
		 * Enable the recent_works_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Recent Works','arc'),
			'singular_name'		=> __('Recent_Work Name','arc'),
			'add_new'				=> __('Add New','arc'),
			'add_new_item'			=> __('Add New recent Work','arc'),
			'edit_item'			=> __('Edit Recent Work','arc'),
			'new_item'				=> __('Add New Recent Work','arc'),
			'view_item'			=> __('View Recent_Work','arc'),
			'search_items'			=> __('Search Recent_works','arc'),
			'not_found'			=> __('No Recent_works items found','arc'),
			'not_found_in_trash'	=> __('No Recent_works found in trash','arc')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'rewrite' => true,			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','page-attributes')
		); 
		$args = apply_filters('arc_recent_works_args',$args);
		register_post_type('recent_works',$args);
		
		$labels_one = array(
			'name'                       => _x('Recent Work Types','taxonomy general name'),
			'singular_name'              => _x('Recent Work Type','taxonomy singular name'),
			'search_items'               => __('Search Recent Work Types'),
			'popular_items'              => __('Popular Recent Work Types'),
			'all_items'                  => __('All Recent Work Types'),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __('Edit Recent Work Type'),
			'update_item'                => __('Update Recent Work Type'),
			'add_new_item'               => __('Add New Recent Work Type'),
			'new_item_name'              => __('New Recent Work Type Name'),
			'separate_items_with_commas' => __('Separate Recent Work types with commas'),
			'add_or_remove_items'        => __('Add or remove Recent Work types'),
			'choose_from_most_used'      => __('Choose from the most used recent Work types'),
			'not_found'                  => __('No Recent Work types found.'),
			'menu_name'                  => __('Recent Work Types'),
		);
	
		$args_one = array(
			'hierarchical'          => true,
			'labels'                => $labels_one,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array('slug' => 'recent_Work_type'),
		);

		register_taxonomy('recent_Work_type','recent_works',$args_one);	
	}
}
new arc_recent_works_Post_Type;
endif;