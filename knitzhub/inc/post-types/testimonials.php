<?php
/***
* Testimonials Post Type
***/

if(! class_exists('arc_Testimonials_Post_Type')):
class arc_Testimonials_Post_Type{

	function __construct(){
		// Adds the testimonials post type and taxonomies
		add_action('init',array(&$this,'testimonials_init'),0);
		// Thumbnail support for testimonials posts
		add_theme_support('post-thumbnails',array('testimonials'));
	}

	function testimonials_init(){
		/**
		 * Enable the Testimonials_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Testimonials','arc'),
			'singular_name'		=> __('Testimonial Name','arc'),
			'add_new'				=> __('Add New','arc'),
			'add_new_item'			=> __('Add New Testimonial','arc'),
			'edit_item'			=> __('Edit Testimonial','arc'),
			'new_item'				=> __('Add New Testimonial','arc'),
			'view_item'			=> __('View Testimonial','arc'),
			'search_items'			=> __('Search Testimonials','arc'),
			'not_found'			=> __('No testimonials items found','arc'),
			'not_found_in_trash'	=> __('No testimonials found in trash','arc')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-testimonial',
			'rewrite' => true,			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','page-attributes')
		); 
		$args = apply_filters('arc_testimonials_args',$args);
		register_post_type('testimonials',$args);
		
		$labels_one = array(
			'name'                       => _x('testimonial Types','taxonomy general name'),
			'singular_name'              => _x('testimonial Type','taxonomy singular name'),
			'search_items'               => __('Search testimonial Types'),
			'popular_items'              => __('Popular testimonial Types'),
			'all_items'                  => __('All testimonial Types'),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __('Edit testimonial Type'),
			'update_item'                => __('Update testimonial Type'),
			'add_new_item'               => __('Add New testimonial Type'),
			'new_item_name'              => __('New testimonial Type Name'),
			'separate_items_with_commas' => __('Separate testimonial types with commas'),
			'add_or_remove_items'        => __('Add or remove testimonial types'),
			'choose_from_most_used'      => __('Choose from the most used testimonial types'),
			'not_found'                  => __('No testimonial types found.'),
			'menu_name'                  => __('testimonial Types'),
		);
	
		$args_one = array(
			'hierarchical'          => true,
			'labels'                => $labels_one,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array('slug' => 'testimonial_type'),
		);

		register_taxonomy('testimonial_type','testimonials',$args_one);	
	}
}
new arc_Testimonials_Post_Type;
endif;