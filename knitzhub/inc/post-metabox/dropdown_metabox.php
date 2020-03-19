<?php


add_action( 'add_meta_boxes', 'so_custom_meta_box' );

function so_custom_meta_box($post){
    add_meta_box('so_meta_box', 'Slider Type', 'slider_type_meta_box','page', 'normal' , 'high');
}

add_action('save_post', 'so_save_metabox');

function so_save_metabox(){ 
    global $post;
    if(isset($_POST["slider_type"])){
         //UPDATE: 
        $meta_element_class = $_POST['slider_type'];
        //END OF UPDATE

        update_post_meta($post->ID, 'slider_type_meta_box', $meta_element_class);
        //print_r($_POST);
    }
}

function slider_type_meta_box($post){
    $meta_element_class = get_post_meta($post->ID, 'slider_type_meta_box', true); //true ensures you get just one value instead of an array
    ?>   
<?php
$taxonomies = get_terms( array(
    'taxonomy' => 'slider_type',
    'hide_empty' => false
) );
 
if ( !empty($taxonomies) ) :
    $output = '<select name="slider_type" style="width:100%;">';
    $output .= '<option value=""> Choose </option>';
    foreach( $taxonomies as $category ) {
        if($meta_element_class==$category->term_id){
            $selected='selected';
        }else{
            $selected="";
        }
        $output.= '<option '.$selected.' value="'. esc_attr( $category->term_id ) .'">
                    '. esc_html( $category->name ) .'</option>';
    }
    $output.='</select>';
    echo $output;
endif;
?>

    <?php
}