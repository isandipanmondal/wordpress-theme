<?php
   /*****************************************
   * knitzhub Functions & Definitions *
   *****************************************/
   $functions_path = get_template_directory().'/functions/';
   $post_type_path = get_template_directory().'/inc/post-types/';
   $post_meta_path = get_template_directory().'/inc/post-metabox/';
   $theme_function_path = get_template_directory().'/inc/theme-functions/';
   /*--------------------------------------*/
   /* Multipost Thumbnail Functions
   /*--------------------------------------*/
   require_once($functions_path.'multipost-thumbnail/multi-post-thumbnails.php');
   if(class_exists('MultiPostThumbnails')){
   	$types = array('services');
   	foreach($types as $type){
   		new MultiPostThumbnails(array(
   			'label' => 'Secondary Image',
   			'id' => 'secondary-image',
   			'post_type' => $type
   			));
   		}		
   	}
/*--------------------------------------*/
   require_once($functions_path.'multipost-thumbnail/multi-post-thumbnails.php');
   if(class_exists('MultiPostThumbnails')){
    $types = array('services');
    foreach($types as $type){
      new MultiPostThumbnails(array(
        'label' => 'Sample Image',
        'id' => 'sample_service_images',
        'post_type' => $type
        ));
      }   
    }
   // add_image_size('top-banner-size-image', 1920, 700,true);
   /*--------------------------------------*/
   /* Optional Panel Helper Functions
   /*--------------------------------------*/
   require_once($functions_path.'admin-functions.php');
   require_once($functions_path.'admin-interface.php');
   require_once($functions_path.'theme-options.php');
   function knitzhub_ftn_wp_enqueue_scripts(){
       if(!is_admin()){
           wp_enqueue_script('jquery');
           if(is_singular()and get_site_option('thread_comments')){
               wp_print_scripts('comment-reply');
   			}
   		}
   	}
   add_action('wp_enqueue_scripts','knitzhub_ftn_wp_enqueue_scripts');
   function knitzhub_ftn_get_option($name){
       $options = get_option('knitzhub_ftn_options');
       if(isset($options[$name]))
           return $options[$name];
   	}
   function knitzhub_ftn_update_option($name, $value){
       $options = get_option('knitzhub_ftn_options');
       $options[$name] = $value;
       return update_option('knitzhub_ftn_options', $options);
   	}
   function knitzhub_ftn_delete_option($name){
       $options = get_option('knitzhub_ftn_options');
       unset($options[$name]);
       return update_option('knitzhub_ftn_options', $options);
   	}
   function get_theme_value($field){
   	$field1 = knitzhub_ftn_get_option($field);
   	if(!empty($field1)){
   		$field_val = $field1;
   		}
   	return	$field_val;
   	}
   
   add_image_size('testimonials_image_size',420,394,true);
   add_image_size('client_image_size',149,53,true);
   add_image_size('sliders_image_siz',1202,350,true);
   add_image_size('service_image_size',143,143,true);
   add_image_size('service_page_image_size',390,401,true);
   add_image_size('tv_post_img_size',262.5,262.5,true);
   add_image_size('tv_post_image_size',711,444,true);
   
   /*--------------------------------------*/
   /* Post Type Helper Functions
   /*--------------------------------------*/
   require_once($post_type_path.'clients.php');
   require_once($post_type_path.'services.php');
   require_once($post_type_path.'testimonials.php');
   require_once($post_type_path.'sliders.php');
   //require_once($post_type_path.'about_services.php');
   //require_once($post_type_path.'mission_sliders.php');
   require_once($post_type_path.'photo_gallary.php');
   require_once($post_type_path.'video_gallary.php');
   require_once($post_type_path.'recent_work.php');
   /*--------------------------------------*/
   /* Post Meta Helper Functions
   /*--------------------------------------*/
   require_once($post_meta_path.'testimonials-metabox.php');
   //require_once($post_meta_path.'sliders-metabox.php');
   require_once($post_meta_path.'post-metabox.php');
   require_once($post_meta_path.'page-metabox.php');
   require_once($post_meta_path.'service-metabox.php');
   require_once($post_meta_path.'product-metabox.php');
   require_once($post_meta_path.'check-metabox.php');
   require_once($post_meta_path.'taxonomy-image-meta.php');
   require_once($post_meta_path.'multiimage_metabox.php');
   require_once($post_meta_path.'video_metabox.php');
   require_once($post_meta_path.'dropdown_metabox.php');
   /*--------------------------------------*/
   /* Theme Functions
   /*--------------------------------------*/
   //require_once($theme_function_path.'extra-functions.php');
   /*--------------------------------------*/
   /* Theme Helper Functions
   /*--------------------------------------*/
   if(!function_exists('knitzhub_theme_setup')):
   	function knitzhub_theme_setup(){
   		add_theme_support('title-tag');
   		add_theme_support('post-thumbnails');
   		register_nav_menus(array(
   			'primary' => __('Primary Menu','knitzhub'),
   			'secondary'  => __('Secondary Menu','knitzhub'),
   			));
   		add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
   		}
   	endif;
   add_action('after_setup_theme','knitzhub_theme_setup');
   function knitzhub_widgets_init(){
   	register_sidebar(array(
   		'name'          => __('Widget Area','knitzhub'),
   		'id'            => 'sidebar-1',
   		'description'   => __('Add widgets here to appear in your sidebar.','knitzhub'),
   		'before_widget' => '<div id="%1$s" class="widget %2$s">',
   		'after_widget'  => '</div>',
   		'before_title'  => '<h2 class="widget-title">',
   		'after_title'   => '</h2>',
   		));
		
	register_sidebar(array(
   		'name'          => __('Single Widget Area','knitzhub'),
   		'id'            => 'sidebar-2',
   		'description'   => __('Add widgets here to appear in your sidebar.','knitzhub'),
   		'before_widget' => '<div id="%1$s" class="custom-sidebar-heading widget %2$s">',
   		'after_widget'  => '</div>',
   		'before_title'  => '<h2 class="widget-title">',
   		'after_title'   => '</h2>',
   		));	
   	}
   add_action('widgets_init','knitzhub_widgets_init');
   function knitzhub_scripts(){
   
   	// Add style, used in the main stylesheet.
   
   	wp_enqueue_style( 'moneytrain-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() );
   	wp_enqueue_style( 'moneytrain-custom', get_template_directory_uri() . '/css/custom.css', array() );
   	wp_enqueue_style( 'moneytrain-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array() );
   	wp_enqueue_style( 'moneytrain-owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', array() );
   	wp_enqueue_style( 'moneytrain-owltheme', get_template_directory_uri() . '/css/owl.theme.css', array() );
   	wp_enqueue_style( 'moneytrain-transitions', get_template_directory_uri() . '/css/owl.transitions.css', array() );
   	wp_enqueue_style( 'moneytrain-lightbox', get_template_directory_uri() . '/css/lightbox.css', array() );
   
   	// Load our main stylesheet.
   	wp_enqueue_style( 'moneytrain-style', get_stylesheet_uri() );
   	wp_enqueue_script( 'moneytrain-jquery', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '20151811', true );
   // wp_register_script('jquery', '../../flipgallery.min.js', FALSE, '1.11.0', TRUE);
   	// Load the Internet Explorer specific script.
   
   	global $wp_scripts;
   
   	wp_enqueue_script( 'moneytrain-boostrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20151811', true );
   	wp_enqueue_script( 'moneytrain-lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array( 'jquery' ), '20151812', true );
   	wp_enqueue_script( 'moneytrain-carouseljs', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), '20151812', true );
   	wp_enqueue_script( 'moneytrain-customjs', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20151814', true );
   	}
   	
   	
   add_action('wp_enqueue_scripts','knitzhub_scripts');
   add_filter('comments_template','legacy_comments');
   function legacy_comments($file){
   	if(!function_exists('wp_list_comments'))	$file = TEMPLATEPATH .'/legacy.comments.php';
   	return $file;
   	}

   
   
