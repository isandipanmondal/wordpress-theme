<?php
/***
* photo_galleries Post Type
***/

if(! class_exists('arc_photo_galleries_Post_Type')):
class arc_photo_galleries_Post_Type{

	function __construct(){
		// Adds the photo_galleries post type and taxonomies
		add_action('init',array(&$this,'photo_galleries_init'),0);
		// Thumbnail support for photo_galleries posts
		add_theme_support('post-thumbnails',array('photo_galleries'));
	}

	function photo_galleries_init(){
		/**
		 * Enable the photo_galleries_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Photo Gallery','arc'),
			'singular_name'		=> __('photo_Gallery Name','arc'),
			'add_new'				=> __('Add New','arc'),
			'add_new_item'			=> __('Add New Photo Gallery','arc'),
			'edit_item'			=> __('Edit photo_Gallery','arc'),
			'new_item'				=> __('Add New photo_Gallery','arc'),
			'view_item'			=> __('View photo_Gallery','arc'),
			'search_items'			=> __('Search photo_gallery','arc'),
			'not_found'			=> __('No photo_gallery items found','arc'),
			'not_found_in_trash'	=> __('No photo_gallery found in trash','arc')
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
		$args = apply_filters('arc_photo_galleries_args',$args);
		register_post_type('photo_galleries',$args);
		
		$labels_one = array(
			'name'                       => _x('Photo Gallery Types','taxonomy general name'),
			'singular_name'              => _x('Photo Gallery Type','taxonomy singular name'),
			'search_items'               => __('Search Photo Gallery Types'),
			'popular_items'              => __('Popular Photo Gallery Types'),
			'all_items'                  => __('All Photo Gallery Types'),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __('Edit Photo Gallery Type'),
			'update_item'                => __('Update Photo Gallery Type'),
			'add_new_item'               => __('Add New Photo Gallery Type'),
			'new_item_name'              => __('New Photo Gallery Type Name'),
			'separate_items_with_commas' => __('Separate Photo Gallery types with commas'),
			'add_or_remove_items'        => __('Add or remove Photo Gallery types'),
			'choose_from_most_used'      => __('Choose from the most used Photo Gallery types'),
			'not_found'                  => __('No Photo Gallery types found.'),
			'menu_name'                  => __('Photo Gallery Types'),
		);
	
		$args_one = array(
			'hierarchical'          => true,
			'labels'                => $labels_one,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array('slug' => 'photo_galleries_type'),
		);

		register_taxonomy('photo_galleries_type','photo_galleries',$args_one);	
	}
}
new arc_photo_galleries_Post_Type;
endif;