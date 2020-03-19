<?php
 
function webq_gallery_add_meta_box() {
global $post;
  $templateName = get_post_meta( $post->ID, '_wp_page_template', true );
if($templateName=='tpl-about.php') {
   $screens = array( 'page');
   
  foreach ( $screens as $screen ) {

    add_meta_box(
      'webq_gallery_sectionid',
      __( 'Add Gallery Images', 'webq_gallery_textdomain' ),
      'webq_gallery_meta_box_callback',
      $screen
    );
  }
}  
}
// if($templateName=='tpl-about.php') {
add_action( 'add_meta_boxes', 'webq_gallery_add_meta_box' );
// }
function webq_gallery_meta_box_callback( $post ) {
    wp_nonce_field( 'webq_gallery_meta_box', 'webq_gallery_meta_box_nonce' );
    global $wpdb;
    $table = $wpdb->prefix."postmeta";
    $_webq_gal_attachments = $wpdb->get_results("SELECT * FROM $table WHERE post_id =".$post->ID." AND meta_key ='_webq_gal_attachments'");

    ?>
      <style type="text/css"> 
    .gal_but  { border: 0 none; margin-left: 5px;position: absolute;z-index: 999;display:none;top:0;cursor:pointer; }
    .gal_images img {position:relative;}
    .abc:hover .gal_but{display:block;border: 0 none;margin-left: 5px;position: absolute;z-index: 999;}
    .abc {width:150px;float:left;height:150px;position:relative;margin:1px;}
    .inside {display:inline-block;}
    </style>
      
      
      
      <div class="supports-drag-drop" style="position: relative; display: none; text-align:center;" id="add_mediq_webq" tabindex="0">
      <div class="media-modal wp-core-ui" id="media-modal-close-webq-div">
        
        

        <img style="padding:4px; margin-top:25px; border:10px solid #fff; position: relative; box-sizing:border-box;" id="popup_image_webqsols" src="http://localhost/artisan/wp-content/uploads/2015/03/iron-1.jpg" />
              .<a href="javascript:;" id="media-modal-close-webq" style="background: none repeat scroll 0 0 #fff;
      border-radius: 33px;
      margin-top: -200px;
      padding: 5px 10px;
      position: relative;
      right: 23px;
      text-decoration: none;
      top: -79%;">X</a>
      
      
      
      </div>
      <div class="media-modal-backdrop"></div>
    </div>
      
      
      
      <div class="uploader">
        <input class="button" name="wevq_upload_button" id="wevq_upload_button" value="Add New Media" />
    </div> 
      <br />
      <div class="gal_images">
      <?php 
    if($_webq_gal_attachments){
      foreach($_webq_gal_attachments as $attachment){
        
        echo '
        <div class="abc">
        <a href="'.wp_get_attachment_url( $attachment->meta_value ).'" id="gal_img_wq_a">
        <img class="webq_gal_image" src="'.wp_get_attachment_thumb_url( $attachment->meta_value ).'" width="150" height="150" >
        <input class="gal_but" id="'.$attachment->meta_id.'" type="button" value="x">
        </a>
        </div>
        ';
      }
    }?>
      </div>   
    <script type="text/javascript">

      jQuery(document).ready(function($)
      {
          var _custom_media = true,
              _orig_send_attachment = wp.media.editor.send.attachment;

          // ADJUST THIS to match the correct button
          $('.uploader .button').on('click',function(e) 
          {
              var send_attachment_bkp = wp.media.editor.send.attachment;
              var button = $(this);
              var id = button.attr('id').replace('_button', '');
              _custom_media = true;
              wp.media.editor.send.attachment = function(props, attachment)
              {
                  if ( _custom_media ) 
                  {
                      var data = {
                'action': 'custom_attachment_my_action',
                'attachment_id': attachment.id ,
                'post_id': '<?php echo $post->ID; ?>'
                
              };
          
              $.post(ajaxurl, data, function(response) {
                
                $( ".gal_images" ).prepend( response );
              });
              
                  } else {
                      return _orig_send_attachment.apply( this, [props, attachment] );
                  };
              }

              wp.media.editor.open(button);
              return false;
          });

          $('.add_media').on('click', function()
          {
              _custom_media = false;
          });
        
        
        //remove_gal_image
        $(document).on('click','.abc .gal_but', function(e) {
          
          $(this).parent().remove();  
          
          var data = {
            'action': 'removecustom_attachment_my_action',
            'meta_id': this.id      
          };

          $.post(ajaxurl, data, function(response) {
            //
          });

        });
        
        
        //for popup
        $(document).on('click','#gal_img_wq_a', function(e) {
          
          
          e.preventDefault()
          $('#popup_image_webqsols').attr('src', $(this).attr('href'));
          $('#add_mediq_webq').show();

        });
        
        $(document).on('click','#media-modal-close-webq,#media-modal-close-webq-div', function(e) {
          
          $('#add_mediq_webq').hide();

        });
        
        
      });

    </script>
    <?php

}

add_action( 'wp_ajax_custom_attachment_my_action', 'custom_attachment_my_action_callback' );

function custom_attachment_my_action_callback() {
    $templateName = get_post_meta( $post->ID, '_wp_page_template', true );
if($templateName=='tpl-about.php') {
  global $wpdb;
  
  $webq_metaid = add_post_meta($_POST['post_id'], '_webq_gal_attachments', $_POST['attachment_id']);
  
  echo '  
  <div class="abc">
    <img class="webq_gal_image" src="'.wp_get_attachment_thumb_url( $_POST['attachment_id'] ).'" width="150" height="150" >
    <input class="gal_but" id="'.$webq_metaid.'" type="button" value="x">
  </div>
  ';

  die(); 
}
}

//for remove
add_action( 'wp_ajax_removecustom_attachment_my_action', 'removecustom_attachment_my_action_callback' );

function removecustom_attachment_my_action_callback() {
  global $wpdb ;
  $wpdb->delete( $wpdb->prefix.'postmeta', array('meta_id' => $_POST['meta_id']) );
  
  die(); 
}