<?php
/* Define the custom box */
add_action( 'add_meta_boxes', 'testimonial_auth_add_custom_box' );
/* Do something with the data entered */
add_action( 'save_post', 'faq_sub_title_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function testimonial_auth_add_custom_box() {
add_meta_box( 'wp_editor_left_box', 'Testimonials Properties ', 'wp_faq_meta_box', 'testimonials', 'normal', 'default' );
}
/* Prints the box content */
function wp_faq_meta_box( $post ) {
// Use nonce for verification
wp_nonce_field( plugin_basename( __FILE__ ), 'faq_sub_title_noncename' );
$field_value = get_post_meta( $post->ID, '_testimonial_auth_title', false );
?>
<p>
<label for="_about_sub_title">Small Heading:</label>
<br>
<input type="text" style="width:100%" tabindex="30" name="_testimonial_auth_title" id="_testimonial_auth_title" class="color" value="<?php echo  get_post_meta( $post->ID, '_testimonial_auth_title', true ); ?>" /> 
</p>
<p>
<label for="_about_sub_title">Small Description:</label>
<br>
<input type="text" style="width:100%" tabindex="30" name="_testimonial_auth_degination" id="_testimonial_auth_degination" class="color" value="<?php echo  get_post_meta( $post->ID, '_testimonial_auth_degination', true ); ?>" /> 
</p>
<?php  
}
/* When the post is saved, saves our custom data */
function faq_sub_title_save_postdata( $post_id ) {
// verify if this is an auto save routine. 
// If it is our form has not been submitted, so we dont want to do anything
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
return;
// verify this came from the our screen and with proper authorization,
// because save_post can be triggered at other times
if ( ( isset ( $_POST['faq_sub_title_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['faq_sub_title_noncename'], plugin_basename( __FILE__ ) ) ) )
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
if ( isset ( $_POST['_testimonial_auth_title'] ) ) {
update_post_meta( $post_id, '_testimonial_auth_title', $_POST['_testimonial_auth_title'] );
update_post_meta( $post_id, '_testimonial_auth_degination', $_POST['_testimonial_auth_degination'] );
}

}
