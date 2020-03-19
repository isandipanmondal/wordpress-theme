<?php
   /* Define the custom box */
   add_action( 'add_meta_boxes', 'Page_heading_add_custom_box' );
   /* Do something with the data entered */
   add_action( 'save_post', 'Page_heading_save_postdata' );
   
   /* Adds a box to the main column on the Post and Page edit screens */
   function Page_heading_add_custom_box() {
     add_meta_box( 'wp_editor_left_box', 'Page Settings', 'wp_heading_meta_box', 'page', 'normal', 'default' );
   }
   
   /* Prints the box content */
   function wp_heading_meta_box( $post ) {
   
     // Use nonce for verification
     wp_nonce_field( plugin_basename( __FILE__ ), 'Page_heading_noncename' );
   
     $field_value = get_post_meta( $post->ID, 'page_heading', false );
   ?>
<?php ////////////////////////////////////////////// ABOUT PAGE //////////////////////////////////////////////////////////?>
<?php $templateName = get_post_meta( $post->ID, '_wp_page_template', true ); ?>
<?php if($templateName=='tpl-about.php') {?>
<p>
   <label for="_service_link_title"><b>ADD BANNER TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="about_banner_title" id="about_banner_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'about_banner_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD BANNER CONTENT :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="about_banner_content" id="about_banner_content" class="color" value="<?php echo  get_post_meta( $post->ID, 'about_banner_content', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD LEARN MORE BUTTON LINK :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="about_banner_learn_more_button_link" id="about_banner_learn_more_button_link" class="color" value="<?php echo  get_post_meta( $post->ID, 'about_banner_learn_more_button_link', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD HEADING :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="page_heading" id="page_heading" class="color" value="<?php echo  get_post_meta( $post->ID, 'page_heading', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD SUB HEADING :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="page_sub_heading" id="page_sub_heading" class="color" value="<?php echo  get_post_meta( $post->ID, 'page_sub_heading', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD VIDEOS EMBEDDED CODE :</b></label>
   <br>
   <textarea name="page_video" id="page_video" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'page_video', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD MONEY TRAIN MISSION TITLE:</B></LABEL>
   <BR>
   <input type="text" style="width:100%" tabindex="30" name="money_train_mission_heading" id="money_train_mission_heading" class="color" value="<?php echo  get_post_meta( $post->ID, 'money_train_mission_heading', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD MONEY TRAIN MISSION SUB TITLE:</b></label>
   <br> 
   <textarea name="money_train_mission_sub_heading" id="money_train_mission_sub_heading" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'money_train_mission_sub_heading', true ); ?> </textarea>
</p>
</p>
<p>
   <label for="_service_link_title"><b>ADD MONEY TRAIN CONTENT:</b></label>
   <br>
   <textarea name="money_train_content" id="money_train_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'money_train_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD GET NOTIFIED TITLE:</b></label>
   <br>
   <textarea name="money_train_notified_title" id="money_train_notified_title" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'money_train_notified_title', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD GET NOTIFIED CONTENT:</b></label>
   <br>
   <textarea name="money_train_notified_content" id="money_train_notified_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'money_train_notified_content', true ); ?> </textarea>
</p>
<?php } ?>
<?php ////////////////////////////////////////////// SERVICES PAGE ////////////////////////////////////////////////////////?>
<?php if($templateName=='tpl-services.php') {?>
<p>
   <label for="_service_link_title"><b>ADD SERVICES SECTION TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="services_page_title" id="services_page_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'services_page_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD SERVICES SECTION CONTENT:</b></label>
   <br>
   <textarea name="services_page_content" id="services_page_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'services_page_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD SERVICES TESTIMONIAL TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="services_page_testimonial_title" id="services_page_testimonial_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'services_page_testimonial_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD SERVICES TESTIMONIAL SUB TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="services_page_testimonial_sub_title" id="services_page_testimonial_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'services_page_testimonial_sub_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD SERVICES SECTION CONTENT:</b></label>
   <br>
   <textarea name="services_page_content" id="services_page_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'services_page_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD MAN BEHIND TITLE:</b></label>
   <br>
   <textarea name="services_man_brand_title" id="services_man_brand_title" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'services_man_brand_title', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD MAN BEHIND SUB TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="services_man_brand_sub_title" id="services_man_brand_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'services_man_brand_sub_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD MAN BEHIND CONTENT:</b></label>
   <br>
   <textarea name="services_man_brand_content" id="services_man_brand_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'services_man_brand_content', true ); ?> </textarea>
</p>
<?php } ?>
<?php ///////////////////////////////////////////// EVENT PAGE //////////////////////////////////////////////////////////?>
<?php if($templateName=='tpl-events.php') {?>


<p>
   <label for="_service_link_title"><b>ADD PHOTO GALLARY TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_photo_gallary_title" id="event_photo_gallary_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_photo_gallary_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD PHOTO GALLARY CONTENT:</b></label>
   <br>
   <textarea name="event_photo_gallary_content" id="event_photo_gallary_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'event_photo_gallary_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD VIDEO GALLARY TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_video_gallary_title" id="event_video_gallary_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_video_gallary_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD VIDEO GALLARY CONTENT:</b></label>
   <br>
   <textarea name="event_video_gallary_content" id="event_video_gallary_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'event_video_gallary_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD QUICK LINKS TITLE: </b></label>
   <br>
   <textarea name="event_quick_links_title" id="event_quick_links_title" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'event_quick_links_title', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD  QUICK LINKS SUB TITLE: </b></label>
   <br>
   <textarea name="event_quick_links_sub_title" id="event_quick_links_sub_title" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'event_quick_links_sub_title', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD DESIGN & ANIMATION TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_design_animation_title" id="event_design_animation_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_design_animation_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD DESIGN & ANIMATION SUB TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_design_animation_sub_title" id="event_design_animation_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_design_animation_sub_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD DESIGN & ANIMATION CONTENT:</b></label>
   <br>
   <textarea name="event_design_animation_content" id="event_design_animation_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'event_design_animation_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD REQUEST BUTTON TEXT: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_request_button" id="event_request_button" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_request_button', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD VIDEO EMBED CODE:</b></label>
   <br>
   <textarea name="event_video_embed_code" id="event_video_embed_code" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'event_video_embed_code', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD LOAD MORE ALBUM URL: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_loadmore_album_url" id="event_loadmore_album_url" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_loadmore_album_url', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD LOAD MORE VIDEOS URL: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="event_loadmore_video_url" id="event_loadmore_video_url" class="color" value="<?php echo  get_post_meta( $post->ID, 'event_loadmore_video_url', true ); ?>" /> 
</p>

<p>
   <label for="_service_link_title"><b>Event Timing & Location: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="eventtiming" id="eventtiming" class="color" value="<?php echo  get_post_meta( $post->ID, 'eventtiming', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>Things to Rememeber: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="Things_to_Rememeber" id="Things_to_Rememeber" class="color" value="<?php echo  get_post_meta( $post->ID, 'Things_to_Rememeber', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>Things to Rememeber Content: </b></label>
   <br>
   
    <textarea name="Things_to_Rememeber_content" id="Things_to_Rememeber_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'Things_to_Rememeber_content', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>SIGN UP FOR GUEST LIST: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="sign_up_guest_list" id="sign_up_guest_list" class="color" value="<?php echo  get_post_meta( $post->ID, 'sign_up_guest_list', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>Celebrate Birthday: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="Celebrate_Birthday" id="Celebrate_Birthday" class="color" value="<?php echo  get_post_meta( $post->ID, 'Celebrate_Birthday', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>SIGN UP FOR Email LIST: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="sign_up_email_list" id="sign_up_email_list" class="color" value="<?php echo  get_post_meta( $post->ID, 'sign_up_email_list', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>Table Reservation: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="Table_Reservation" id="Table_Reservation" class="color" value="<?php echo  get_post_meta( $post->ID, 'Table_Reservation', true ); ?>" /> 
</p>

<?php } ?>
<?php //////////////////////////////////////////// MONEYTRAINTV PAGE //////////////////////////////////////////////////////?>
<?php if($templateName=='tpl-moneytraintv.php') {?>
<p>
   <label for="_service_link_title"><b>ADD RECEENT POST TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_post_title" id="moneytraintv_post_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_post_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD RECEENT POST SUB TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_post_sub_title" id="moneytraintv_post_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_post_sub_title', true ); ?>" /> 
</p>



<p>
   <label for="_service_link_title"><b>ADD FEATURED POST TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_featured_post_title" id="moneytraintv_featured_post_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_featured_post_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD FEATURED POST SUB TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_featured_post_sub_title" id="moneytraintv_featured_post_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_featured_post_sub_title', true ); ?>" /> 
</p>

<p>
   <label for="_service_link_title"><b>ADD MONEYTRAINTV LOGO CONTENT: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_sec_title" id="moneytraintv_sec_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_sec_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD MUSIC TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_music_title" id="moneytraintv_music_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_music_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD MUSIC SUB TITLE: </b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="moneytraintv_music_sub_title" id="moneytraintv_music_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'moneytraintv_music_sub_title', true ); ?>" /> 
</p>

<?php } ?>
<?php ///////////////////////////////////////////// CONTACT PAGE //////////////////////////////////////////////////////////?>
<?php if($templateName=='tpl-contact.php') {?>
<p>
   <label for="_service_link_title"><b>ADD BANNER MAP EMBED CODE:</b></label>
   <br>
   <textarea name="contact_page_banner_map" id="contact_page_banner_map" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'contact_page_banner_map', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD CONTACT TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_title" id="contact_page_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD CONTACT HEADING:</b></label>
   <br>
   <textarea name="contact_page_heading" id="contact_page_heading" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'contact_page_heading', true ); ?> </textarea>
</p>

<p>
   <label for="_service_link_title"><b>ADD CONTACT SUB HEADING :</b></label>
   <br>
   <textarea name="contact_page_sub_heading" id="contact_page_sub_heading" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'contact_page_sub_heading', true ); ?> </textarea>
</p>
<p>
   <label for="_service_link_title"><b>ADD CLICK TO CALL LINK :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_call_button" id="contact_page_call_button" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_call_button', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD QUICK CONTACT TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_quick_contact_title" id="contact_page_quick_contact_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_quick_contact_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD QUICK CONTACT SUB TITLE:</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_quick_contact_sub_title" id="contact_page_quick_contact_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_quick_contact_sub_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD ADDRESS TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_address_title" id="contact_page_address_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_address_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD CONTACT ADDRESS  :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_address_sub_title" id="contact_page_address_sub_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_address_sub_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD CALL US TITLE :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_callus_title" id="contact_page_callus_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_callus_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD PHONE NUMBER :</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_call_phone" id="contact_page_call_phone" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_call_phone', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD GET IN TOUCH TITLE:</b></label>
   <br>
   <input type="text" style="width:100%" tabindex="30" name="contact_page_getin_touch_title" id="contact_page_getin_touch_title" class="color" value="<?php echo  get_post_meta( $post->ID, 'contact_page_getin_touch_title', true ); ?>" /> 
</p>
<p>
   <label for="_service_link_title"><b>ADD GET IN TOUCH CONTENT:</b></label>
   <br>
   <textarea name="contact_page_getin_touch_content" id="contact_page_getin_touch_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'contact_page_getin_touch_content', true ); ?> </textarea>
</p>
<?php } ?>
<?php  
}

/* When the post is saved, saves our custom data */
function Page_heading_save_postdata( $post_id ) {
// verify if this is an auto save routine. 
// If it is our form has not been submitted, so we dont want to do anything
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
return;
// verify this came from the our screen and with proper authorization,
// because save_post can be triggered at other times
if ( ( isset ( $_POST['Page_heading_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['Page_heading_noncename'], plugin_basename( __FILE__ ) ) ) )
return;
// Check permissions
if ( ( isset ( $_POST['post_type'] ) ) && ( 'page' == $_POST['post_type'] )  ) {
if ( ! current_user_can( 'edit_page', $post_id ) ) {
return;
}    
}
else {
if ( ! current_user_can( 'edit_post', $post_id ) ) {
return;
}
}
// OK, we're authenticated: we need to find and save the data
//About Page
$templateName = get_post_meta( $post_id, '_wp_page_template', true ); 
if($templateName=='tpl-about.php'){
update_post_meta( $post_id, 'about_banner_title', $_POST['about_banner_title'] );
update_post_meta( $post_id, 'about_banner_content', $_POST['about_banner_content'] );
update_post_meta( $post_id, 'about_banner_learn_more_button_link', $_POST['about_banner_learn_more_button_link'] );
update_post_meta( $post_id, 'page_heading', $_POST['page_heading'] );
update_post_meta( $post_id, 'page_sub_heading', $_POST['page_sub_heading'] );
update_post_meta( $post_id, 'page_video', $_POST['page_video'] );
update_post_meta( $post_id, 'money_train_mission_heading', $_POST['money_train_mission_heading'] );
update_post_meta( $post_id, 'money_train_mission_sub_heading', $_POST['money_train_mission_sub_heading'] );
update_post_meta( $post_id, 'money_train_content', $_POST['money_train_content'] );
update_post_meta( $post_id, 'money_train_notified_title', $_POST['money_train_notified_title'] );
update_post_meta( $post_id, 'money_train_notified_content', $_POST['money_train_notified_content'] );
} 
//Event Page
if($templateName=='tpl-events.php'){
update_post_meta( $post_id, 'event_photo_gallary_title', $_POST['event_photo_gallary_title'] );
update_post_meta( $post_id, 'event_photo_gallary_content', $_POST['event_photo_gallary_content'] );
update_post_meta( $post_id, 'event_video_gallary_title', $_POST['event_video_gallary_title'] );
update_post_meta( $post_id, 'event_video_gallary_content', $_POST['event_video_gallary_content'] );
update_post_meta( $post_id, 'event_quick_links_title', $_POST['event_quick_links_title'] );
update_post_meta( $post_id, 'event_quick_links_sub_title', $_POST['event_quick_links_sub_title'] );
update_post_meta( $post_id, 'event_design_animation_title', $_POST['event_design_animation_title'] );
update_post_meta( $post_id, 'event_design_animation_sub_title', $_POST['event_design_animation_sub_title'] );
update_post_meta( $post_id, 'event_design_animation_content', $_POST['event_design_animation_content'] );
update_post_meta( $post_id, 'event_request_button', $_POST['event_request_button'] );
update_post_meta( $post_id, 'event_video_embed_code', $_POST['event_video_embed_code'] );
update_post_meta( $post_id, 'event_loadmore_album_url', $_POST['event_loadmore_album_url'] );
update_post_meta( $post_id, 'event_loadmore_video_url', $_POST['event_loadmore_video_url'] );
update_post_meta( $post_id, 'eventtiming', $_POST['eventtiming'] );
update_post_meta( $post_id, 'Things_to_Rememeber', $_POST['Things_to_Rememeber'] );
update_post_meta( $post_id, 'Things_to_Rememeber_content', $_POST['Things_to_Rememeber_content'] );
update_post_meta( $post_id, 'sign_up_guest_list', $_POST['sign_up_guest_list'] );
update_post_meta( $post_id, 'Celebrate_Birthday', $_POST['Celebrate_Birthday'] );
update_post_meta( $post_id, 'sign_up_email_list', $_POST['sign_up_email_list'] );
update_post_meta( $post_id, 'Table_Reservation', $_POST['Table_Reservation'] );
}
//services Page.
if($templateName=='tpl-services.php'){
update_post_meta( $post_id, 'services_page_title', $_POST['services_page_title'] );
update_post_meta( $post_id, 'event_banner_conent', $_POST['event_banner_conent'] );
update_post_meta( $post_id, 'services_page_testimonial_title', $_POST['services_page_testimonial_title'] );
update_post_meta( $post_id, 'services_page_testimonial_sub_title', $_POST['services_page_testimonial_sub_title'] );
update_post_meta( $post_id, 'services_man_brand_title', $_POST['services_man_brand_title'] );
update_post_meta( $post_id, 'services_man_brand_sub_title', $_POST['services_man_brand_sub_title'] );
update_post_meta( $post_id, 'services_man_brand_content', $_POST['services_man_brand_content'] );
} 
//moneytraintv Page
if($templateName=='tpl-moneytraintv.php'){
update_post_meta( $post_id, 'moneytraintv_post_title', $_POST['moneytraintv_post_title'] );
update_post_meta( $post_id, 'moneytraintv_post_sub_title', $_POST['moneytraintv_post_sub_title'] );
update_post_meta( $post_id, 'moneytraintv_featured_post_title', $_POST['moneytraintv_featured_post_title'] );
update_post_meta( $post_id, 'moneytraintv_featured_post_sub_title', $_POST['moneytraintv_featured_post_sub_title'] );
update_post_meta( $post_id, 'moneytraintv_sec_title', $_POST['moneytraintv_sec_title'] );
update_post_meta( $post_id, 'moneytraintv_music_title', $_POST['moneytraintv_music_title'] );
update_post_meta( $post_id, 'moneytraintv_music_sub_title', $_POST['moneytraintv_music_sub_title'] );
}
//contact Page.
if($templateName=='tpl-contact.php'){
update_post_meta( $post_id, 'contact_page_banner_map', $_POST['contact_page_banner_map'] );
update_post_meta( $post_id, 'contact_page_title', $_POST['contact_page_title'] );
update_post_meta( $post_id, 'contact_page_heading', $_POST['contact_page_heading'] );
update_post_meta( $post_id, 'contact_page_sub_heading', $_POST['contact_page_sub_heading'] );
update_post_meta( $post_id, 'contact_page_call_button', $_POST['contact_page_call_button'] );
update_post_meta( $post_id, 'contact_page_quick_contact_title', $_POST['contact_page_quick_contact_title'] );
update_post_meta( $post_id, 'contact_page_quick_contact_sub_title', $_POST['contact_page_quick_contact_sub_title'] );
update_post_meta( $post_id, 'contact_page_address_title', $_POST['contact_page_address_title'] );
update_post_meta( $post_id, 'contact_page_address_sub_title', $_POST['contact_page_address_sub_title'] );
update_post_meta( $post_id, 'contact_page_callus_title', $_POST['contact_page_callus_title'] );
update_post_meta( $post_id, 'contact_page_call_phone', $_POST['contact_page_call_phone'] );
update_post_meta( $post_id, 'contact_page_getin_touch_title', $_POST['contact_page_getin_touch_title'] );
update_post_meta( $post_id, 'contact_page_getin_touch_content', $_POST['contact_page_getin_touch_content'] );
}
}