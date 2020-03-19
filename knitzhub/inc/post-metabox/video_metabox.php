<?php
/* Define the custom box */
add_action( 'add_meta_boxes', 'vedio_add_custom_box' );
/* Do something with the data entered */
add_action( 'save_post', 'vedio_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function vedio_add_custom_box() {
  add_meta_box( 'wp_editor_left_box', 'VIDEOS', 'video_meta_box', 'video_galleries', 'normal', 'default' );
}

/* Prints the box content */
function video_meta_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'vedio_noncename' );

  $field_value = get_post_meta( $post->ID, 'vedio_code', false );
?>
    <p>
       <label for="_service_link_title"><B>ADD VIDEO'S EMBED CODE: </B></label>
         <br>
          <textarea name="vedio_code" id="vedio_code" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'vedio_code', true ); ?> </textarea>
    </p>
    <p>
    <label for="_service_link_title"><B>ADD VIDEO'S DESCRIPTIONS : </B></label>
    <br>
    <textarea name="vedio_descriptions" id="vedio_descriptions" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'vedio_descriptions', true ); ?> </textarea>
    </p>
<?php  
}

/* When the post is saved, saves our custom data */
function vedio_save_postdata( $post_id ) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if ( ( isset ( $_POST['vedio_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['vedio_noncename'], plugin_basename( __FILE__ ) ) ) )
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
  if ( isset ( $_POST['vedio_code'] ) ) {
    update_post_meta( $post_id, 'vedio_code', $_POST['vedio_code'] );
    update_post_meta( $post_id, 'vedio_descriptions', $_POST['vedio_descriptions'] );
  }

}