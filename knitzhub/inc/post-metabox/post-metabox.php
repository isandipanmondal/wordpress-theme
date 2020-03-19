<?php
/* Define the custom box */
add_action( 'add_meta_boxes', 'post_mtv_metabox' );
/* Do something with the data entered */
add_action( 'save_post', 'mtv_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function post_mtv_metabox() {
  add_meta_box( 'wp_editor_left_box', 'OTHER FIELDS', 'mtv_contact_meta_box', 'post', 'normal', 'default' );
}

/* Prints the box content */
function mtv_contact_meta_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'mtv_contact_noncename' );

  $field_value = get_post_meta( $post->ID, 'mtv_content_home', false );
?>
    <p>
       <label for="_mtv_link_title"><b>ADD POST VIDEO & AUDIO EMBED CODE: </b></label>
         <br>
         <textarea name="contact_page_getin_touch_content" id="contact_page_getin_touch_content" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'contact_page_getin_touch_content', true ); ?> </textarea> 
      </p>

      <p>
       <label for="_mtv_link_title"><b>SUB TITLE: </b></label>
         <br>
         <input type="text" name="post_sub_title" id="post_sub_title" value="<?php echo  get_post_meta( $post->ID, 'post_sub_title', true ); ?>" size="100" /> 
      </p>

      <p>
       <label for="_mtv_link_title"><b>SUB DESCRIPTIONS: </b></label>
         <br>
         <textarea name="post_sub_description" id="post_sub_description" cols="130" rows="4" /><?php echo  get_post_meta( $post->ID, 'post_sub_description', true ); ?> </textarea> 
      </p>
<?php  
}

/* When the post is saved, saves our custom data */
function mtv_save_postdata( $post_id ) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if ( ( isset ( $_POST['mtv_contact_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['mtv_contact_noncename'], plugin_basename( __FILE__ ) ) ) )
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
 
    update_post_meta( $post_id, 'contact_page_getin_touch_content', $_POST['contact_page_getin_touch_content'] );
    update_post_meta( $post_id, 'post_sub_title', $_POST['post_sub_title'] );
    update_post_meta( $post_id, 'post_sub_description', $_POST['post_sub_description'] );
}