<?php
add_action("admin_init", "checkbox_init");

function checkbox_init(){
  add_meta_box("checkbox", "Checkbox", "checkbox", "services", "normal", "high");
}

function checkbox(){
  global $post;
  $custom = get_post_custom($post->ID);
  $field_id = $custom["field_id"][0];
 ?>

  <label>Check for yes</label>
  <?php $field_id_value = get_post_meta($post->ID, 'field_id', true);
  if($field_id_value == "yes") $field_id_checked = 'checked="checked"'; ?>
    <input type="checkbox" name="field_id" value="yes" <?php echo $field_id_checked; ?> /><i><p>(If you want to show sample image)</p></i>
    
  <?php

}
?><?php
// Save Meta Details
add_action('save_post', 'save_details');

function save_details(){
  global $post;

if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post->ID;
}

  update_post_meta($post->ID, "field_id", $_POST["field_id"]);
} ?>