<?php
/***
* video_Galleries Post Type
***/

if(! class_exists('arc_video_Galleries_Post_Type')):
class arc_video_Galleries_Post_Type{

	function __construct(){
		// Adds the video_Galleries post type and taxonomies
		add_action('init',array(&$this,'video_Galleries_init'),0);
		// Thumbnail support for video_Galleries posts
		add_theme_support('post-thumbnails',array('video_Galleries'));
	}

	function video_Galleries_init(){
		/**
		 * Enable the video_Galleries_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Video Gallery','arc'),
			'add_new'				=> __('Add New','arc'),
			'add_new_item'			=> __('Add New Video Gallary','arc'),
			'edit_item'			=> __('Edit Video_gallery','arc'),
			'new_item'				=> __('Add New Video_gallery','arc'),
			'view_item'			=> __('View Video_gallary','arc'),
			'search_items'			=> __('Search Video_Gallery','arc'),
			'not_found'			=> __('No Video_Gallery items found','arc'),
			'not_found_in_trash'	=> __('No Video_Gallery found in trash','arc')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-format-video',
			'rewrite' => true,			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','thumbnail','page-attributes')
		); 
		$args = apply_filters('arc_video_Galleries_args',$args);
		register_post_type('video_Galleries',$args);

		
	}
}
new arc_video_Galleries_Post_Type;
endif;