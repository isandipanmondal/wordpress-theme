<?php
/* Define the custom box */
add_action( 'add_meta_boxes', 'post_service_metabox' );
/* Do something with the data entered */
add_action( 'save_post', 'service_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function post_service_metabox() {
  add_meta_box( 'wp_editor_left_box', 'OTHER FIELDS', 'service_contact_meta_box', 'services', 'normal', 'default' );
}

/* Prints the box content */
function service_contact_meta_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'service_contact_noncename' );

  $field_value = get_post_meta( $post->ID, 'service_content_home', false );
?>
    <p>
       <label for="_service_link_title"><b>ADD HOME PAGE CONTENT: </b></label>
         <br>
          <input type="text" style="width:100%" tabindex="30" name="service_content_home" id="service_content_home" class="color" value="<?php echo  get_post_meta( $post->ID, 'service_content_home', true ); ?>" /> 
      </p>
         <p>
       <label for="_service_link_title"><b>ADD INQUIRIES BUTTON: </b></label>
         <br>
          <input type="text" style="width:100%" tabindex="30" name="service_page_inquiries" id="service_page_inquiries" class="color" value="<?php echo  get_post_meta( $post->ID, 'service_page_inquiries', true ); ?>" /> 
      </p>
    <p>
       <label for="_service_link_title"><b>ADD CONTACT: </b></label>
         <br>
          <input type="text" style="width:100%" tabindex="30" name="service_page_contact" id="service_page_contact" class="color" value="<?php echo  get_post_meta( $post->ID, 'service_page_contact', true ); ?>" /> 
    	</p>

      <p>
       <label for="_service_link_title"><b>Money Train Link: </b></label>
         <br>
          <input type="text" style="width:100%" tabindex="30" name="service_page_link" id="service_page_link" class="color" value="<?php echo  get_post_meta( $post->ID, 'service_page_link', true ); ?>" /> 
      </p>
    
<?php  
}

/* When the post is saved, saves our custom data */
function service_save_postdata( $post_id ) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if ( ( isset ( $_POST['service_contact_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['service_contact_noncename'], plugin_basename( __FILE__ ) ) ) )
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
 update_post_meta( $post_id, 'service_content_home', $_POST['service_content_home'] );
    update_post_meta( $post_id, 'service_page_inquiries', $_POST['service_page_inquiries'] );
    update_post_meta( $post_id, 'service_page_contact', $_POST['service_page_contact'] );
    update_post_meta( $post_id, 'service_page_link', $_POST['service_page_link'] );
}