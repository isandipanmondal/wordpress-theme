<?php
/*photo_galleries_type Taxonomy Meta*/
add_action( 'photo_galleries_type_add_form_fields', 'photo_galleries_type_add_new_meta_field', 10, 2 );
 
function photo_galleries_type_add_new_meta_field() {
    wp_register_script('upload-img-photo_galleries_type', get_template_directory_uri() . '/inc/post-metabox/workout.js', array('jquery','wp-color-picker'),false, true );
    wp_enqueue_script('upload-img-photo_galleries_type');
    
    wp_enqueue_media();

    $color_image_url = get_term_meta( $term->term_id,'_photo_galleries_type_image_url',true );
    ?>
    <!-- Image Upload -->
    <div class="form-field">
        <label for="_photo_galleries_type_image_url"><?php _e( 'Color Image', 'hbs' ); ?></label>
        <?php if (!empty($color_image_url)) {
        ?>
        <img class="prw_img" src="<?php echo $color_image_url;?>" width="60px" height="60px">
        <?php
        } else { ?>
        <img class="prw_img" src="<?php echo home_url(); ?>/wp-content/themes/moneytrain/images/placeholder.png" width="60px" height="60px">
        <?php } ?>
        <input type="hidden" name="_photo_galleries_type_image_url" id="term_meta" value="<?php echo $color_image_url;?>"><br>
        <input type="button" class="button button-primary" id="cat_icon_button" value="Upload" />
        <input type="button" class="button button-primary" id="cat_icon_reset_button" value="Remove" <?php if (empty($color_image_url)) {echo "style='display:none;'";}
        ?> >
    </div>
    <?php
}

add_action( 'photo_galleries_type_edit_form_fields', 'photo_galleries_type_edit_meta_field', 10, 2 );
 
function photo_galleries_type_edit_meta_field($term) {
    wp_register_script('upload-img-photo_galleries_type', get_template_directory_uri() . '/inc/post-metabox/workout.js', array('jquery','wp-color-picker'),false, true  );
    wp_enqueue_script('upload-img-photo_galleries_type');    
    wp_enqueue_media();

    $color_image_url = get_term_meta( $term->term_id,'_photo_galleries_type_image_url',true );
    ?>
    <!-- Image Upload -->
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="term_meta"><?php _e( 'Color Image', 'hbs' ); ?></label></th>
        <td>
          <?php if (!empty($color_image_url)) { ?>
            <img width="60px" height="60px" class="prw_img" src="<?php echo $color_image_url; ?>">
          <?php } else { ?> 
            <img class="prw_img" src="<?php echo home_url(); ?>/wp-content/themes/moneytrain/images/placeholder.png" width="60px" height="60px">
          <?php } ?>
            <input type="hidden" name="_photo_galleries_type_image_url" id="term_meta" value="<?php echo $color_image_url; ?>" readonly><br>
            <input type="button" class="button button-primary" id="cat_icon_button" value="Upload" />
            <input type="button" class="button button-primary" id="cat_icon_reset_button" value="Remove" />
        </td>
    </tr>
    <?php
}

// Save extra taxonomy fields callback function.
add_action( 'edited_photo_galleries_type', 'photo_galleries_type_save_taxonomy_meta', 10, 2 );
add_action( 'create_photo_galleries_type', 'photo_galleries_type_save_taxonomy_meta', 10, 2 );
 
function photo_galleries_type_save_taxonomy_meta( $term_id ) {
  $color_image_url = isset($_POST['_photo_galleries_type_image_url'])?$_POST['_photo_galleries_type_image_url']:'';  
  update_term_meta($term_id, '_photo_galleries_type_image_url', $color_image_url);
}