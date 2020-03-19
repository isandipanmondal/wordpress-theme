<?php
/* Define the custom box */
add_action( 'add_meta_boxes', 'slider_service_link_add_custom_box' );
/* Do something with the data entered */
add_action( 'save_post', 'slider_service_link_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function slider_service_link_add_custom_box() {
  add_meta_box( 'wp_editor_left_box', 'Slider Link', 'wp_slider_meta_box', 'sliders', 'normal', 'default' );
}

/* Prints the box content */
function wp_slider_meta_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'slider_service_link_noncename' );

  $field_value = get_post_meta( $post->ID, '_slider_service_link', false );
?>
    <p>
       <label for="_service_link_title">Add Services link</label>
         <br>
          <input type="text" style="width:100%" tabindex="30" name="_slider_service_link" id="_slider_service_link" class="color" value="<?php echo  get_post_meta( $post->ID, '_slider_service_link', true ); ?>" /> 
    	</p>
       <p>
       <label for="_service_link_title">Add Contact link</label>
         <br>
          <input type="text" style="width:100%" tabindex="30" name="_slider_contact_link" id="_slider_contact_link" class="color" value="<?php echo  get_post_meta( $post->ID, '_slider_contact_link', true ); ?>" /> 
    </p>
<?php  
}

/* When the post is saved, saves our custom data */
function slider_service_link_save_postdata( $post_id ) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if ( ( isset ( $_POST['slider_service_link_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['slider_service_link_noncename'], plugin_basename( __FILE__ ) ) ) )
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
  if ( isset ( $_POST['_slider_service_link'] ) ) {
    update_post_meta( $post_id, '_slider_service_link', $_POST['_slider_service_link'] );
    update_post_meta( $post_id, '_slider_contact_link', $_POST['_slider_contact_link'] );
  }

}