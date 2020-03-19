<?php
add_action('init','knitzhub_ftn_options');
if(!function_exists('knitzhub_ftn_options')){
	function knitzhub_ftn_options(){
		// If using image radio buttons,define a directory path
		$imagepath = get_stylesheet_directory_uri().'/images/'; 
		$options = array(
		/* ---------------------------------------------------------------------------- */
		/* Header Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Header Section",
			  "type" => "heading"),
		array("name" => "Choose Site Logo",
			  "desc" => "Optimal size: 311px width by 84px height.",
			  "id"   => "knitzhub_header_logo",
			  "std"  => "",
			  "type" => "upload"),
		/* ---------------------------------------------------------------------------- */
		/* Footer Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Footer Section",
			  "type" => "heading"),
	   array("name" => "Choose Site Logo",
			  "desc" => "Optimal size: 481px width by 94px height.",
			  "id"   => "knitzhub_footer_logo",
			  "std"  => "",
			  "type" => "upload"),
		array("name" => "Footer Left content",
			  "desc" => "Enter Footer Short description Here",
			  "id"   => "knitzhub_footer_contact",
			  "std"  => "",
			  "type" =>"textarea"),
		array("name" => "Footer Recent Post Title",
			  "desc" => "Enter Recent Post Title here",
			  "id"   => "knitzhub_recent_post_title",
			  "std"  => "",
			  "type" => "textarea"),
		array("name" => "Footer Important Links Title",
			  "desc" => "Enter Importent Links Title here",
			  "id"   => "knitzhub_importent_links_title",
			  "std"  => "",
			  "type" => "textarea"),
		array("name" => "Footer Mailing List Title",
			  "desc" => "Enter Mailing List Title here",
			  "id"   => "knitzhub_mailing_list",
			  "std"  => "",
			  "type" => "textarea"),
		/* ---------------------------------------------------------------------------- */
		/* Footer Social Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Social Section",
			  "type" => "heading"),
		array("name" => "Facebook",
			  "desc" => "Enter Facebook Link Here",
			  "id"   => "knitzhub_footer_fb",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Twitter",
			  "desc" => "Enter twitter Link Here",
			  "id"   => "knitzhub_footer_twitter",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Instagram",
			  "desc" => "Enter instagram Link Here",
			  "id"   => "knitzhub_footer_instagram",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Youtube",
			  "desc" => "Enter youtube Link Here",
			  "id"   => "knitzhub_footer_youtube",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Feed",
			  "desc" => "Enter feed Link Here",
			  "id"   => "knitzhub_footer_feed",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Flickr",
			  "desc" => "Enter flickr Link Here",
			  "id"   => "knitzhub_footer_flickr",
			  "std"  => "",
			  "type" => "text"),
		/* ---------------------------------------------------------------------------- */
		/* Footer Contact Setting */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Contact Section",
		      "type" => "heading"),
		array("name" => "Footer Gmail",
			  "desc" => "Enter Your Gmail",
			  "id"   => "knitzhub_footer_gmail",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "footer phone",
			  "desc" => "Enter your phone number here",
			  "id"   => "knitzhub_footer_phone",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "footer website",
			  "desc" => "Enter your website link",
			  "id"   => "knitzhub_footer_website",
			  "std"  => "",
			  "type" => "text"),
		/* ---------------------------------------------------------------------------- */
		/* Footer Contact Setting */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Footer Bottom Section",
		      "type" => "heading"),
		array("name" => "footer copyright",
			  "desc" => "Enter copyright Text here",
			  "id"   => "knitzhub_copyright",
			  "std"  => "",
			  "type" => "text"),

		/* ---------------------------------------------------------------------------- */
		/* Home page Content chenge Sections */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Home Page Services Section Heading",
		      "type" => "heading"),

		array("name" => "Top heading",
			  "desc" => "Enter First Heading here",
			  "id"   => "knitzhub_Services_topheading",
			  "std"  => "",
			  "type" => "textarea"),

		array("name" => "Bottom heading",
			  "desc" => "Enter Second Heading here",
			  "id"   => "knitzhub_Services_bottomheading",
			  "std"  => "",
			  "type" => "text"),
			
        /* ---------------------------------------------------------------------------- */
		/* Home page Content chenge Sections */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Home Page RecentWork Section Heading",
		      "type" => "heading"),
		array("name" => "Top heading",
			  "desc" => "Enter First Heading here",
			  "id"   => "knitzhub_RecentWork_topheading",
			  "std"  => "",
			  "type" => "text"),

		array("name" => "Bottom heading",
			  "desc" => "Enter Second Heading here",
			  "id"   => "knitzhub_RecentWork_bottomheading",
			  "std"  => "",
			  "type" => "text"),

		array("name" => "Recent Update Link",
			  "desc" => "Enter Recent Update Link",
			  "id"   => "knitzhub_recenyup_link",
			  "std"  => "",
			  "type" => "text"),
					
			
        /* ---------------------------------------------------------------------------- */
		/* Home page Content chenge Sections */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Home Page Client Sections",
		      "type" => "heading"),
		array("name" => "Client Title",
			  "desc" => "Enter Title here",
			  "id"   => "knitzhub_ClientTitle",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Client Content",
			  "desc" => "Enter Second Heading here",
			  "id"   => "knitzhub_ClientContent",
			  "std"  => "",
			  "type" => "textarea"),
        /* ---------------------------------------------------------------------------- */
		/* Sarvices page Sections */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Services Page Sample Images",
		      "type" => "heading"),
		array("name" => "Services Page Sample Images",
			  "desc" => "Optimal size: 311px width by 84px height.",
			  "id"   => "services_page_images",
			  "std"  => "",
			  "type" => "upload"),
			  
		/* ---------------------------------------------------------------------------- */
		/* Upcoming Events Sections */
		/* ---------------------------------------------------------------------------- */
			
		array("name" => "Upcoming Events Sections",
		      "type" => "heading"),
		array("name" => "Heading",
			  "desc" => "",
			  "id"   => "upcoming_events_heading",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Button Text",
			  "desc" => "",
			  "id"   => "upcoming_events_button_text",
			  "std"  => "",
			  "type" => "text"),				  


			);	
		knitzhub_ftn_update_option('of_template',$options);
		}
	}
?>