<?php 
add_action("admin_init", "admin_init1");
 function admin_init1()
{
  add_meta_box("scheduling_option", "Event Section", "scheduling_option1", "product", "normal", "low");
}

function scheduling_option1() 
{ global $wpdb,$post;?>

<table>
<tr>
<td>Event Date:</td>
 <td><input type="date" id="startdate"  name="startdate" value="<?php echo get_post_meta($post->ID,'start',true); ?>" style="width:200px;" /></td>
</tr>
 <tr>
 <td>Event Time:</td>
 <td><input type="time" id="timing"  name="timing" value="<?php echo get_post_meta($post->ID,'time',true); ?>" style="width:200px;" /></td>
 </tr>
</table>
<?php } 

add_action('transition_post_status', 'save_details1');
function save_details1()
{
global $wpdb,$post; 
update_post_meta($post->ID, 'start', $_POST["startdate"]); 
update_post_meta($post->ID, 'time', $_POST["timing"]); 

}