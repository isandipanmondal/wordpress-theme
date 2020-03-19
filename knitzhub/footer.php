<section class="full footer-clients">
         <div class="container">
            <div class="row">
              <?php $Moneytrain_ClientTitle = get_theme_value("Moneytrain_ClientTitle"); ?>
               <h2 class="text-center"><?php if(!empty($Moneytrain_ClientTitle)) { ?><?php echo $Moneytrain_ClientTitle; ?>
                  <?php } ?></h2>
               <div class="col-md-6 col-md-push-3 client-tagline text-center clearfix">
                  <?php $Moneytrain_ClientContent = get_theme_value("Moneytrain_ClientContent"); ?>
                  <p><?php if(!empty($Moneytrain_ClientContent)){?><?php echo $Moneytrain_ClientContent; ?><?php } ?></p>
               </div>
               <div class="full">
                  <div class="col-lg-12 clearfix">
                     <div id="clients-carousel" class="owl-carousel owl-theme">

                        <?php
               $args = array( 'post_type' => 'clients', 'order' => 'ASC', 'posts_per_page' => -1 );
               $myposts = get_posts( $args );
               foreach ( $myposts as $post ) : setup_postdata( $post );
               $clientsimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'client_image_size');
               ?>
                        <div class="owl-item">
                           <div class="item text-center">
                              <img src="<?php echo $clientsimage[0]; ?>" alt="<?php echo $clientsimage[0]; ?>">
                           </div>
                        </div>
                        <?php 
                        endforeach; 
                        wp_reset_postdata();
                       ?>
                        
                        <div class="owl-controls clickable" style="display: none;">
                           <div class="owl-buttons">
                              <div class="owl-prev"></div>
                              <div class="owl-next"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="full">
         <div class="footer-top full">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 clearfix">
                     <div class="footer-column-inner clearfix">
                        <ul>
                           <li>
                              <div class="footer-logo clearfix">
                                 <?php $moneytrain_footer_logo = get_theme_value("Moneytrain_footer_logo"); ?>
                              <?php if(!empty($moneytrain_footer_logo)) {?>
                              <a href="<?php echo home_url('/');?>"><img src="<?php echo $moneytrain_footer_logo;?>" alt="" /></a>
                              <?php  } else {?>
                              <a href="<?php echo home_url('/');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /> </a>
                              <?php } ?>
                              </div>
                              <div class="footer-text clearfix">
                                 <?php $Moneytrain_footer_contact = get_theme_value("Moneytrain_footer_contact"); ?>
                                 <?php if(!empty($Moneytrain_footer_contact)) { ?>
                                 <p> <?php echo $Moneytrain_footer_contact;  ?></p>
                                 <?php } ?> 
                              </div>
                              <?php $Moneytrain_footer_fb = get_theme_value("Moneytrain_footer_fb"); ?>
                               <div class="social-icon clearfix">
                                 <a href="<?php if(!empty($Moneytrain_footer_fb)){echo $Moneytrain_footer_fb; }?>" class="fb-ico" target="_blank"></a>
                                 <?php $Moneytrain_footer_twitter = get_theme_value("Moneytrain_footer_twitter"); ?>
                                 <a href="<?php if(!empty($Moneytrain_footer_twitter)) {echo $Moneytrain_footer_twitter; }?>" class="twitter-ico" target="_blank"></a>
                                  <?php $Moneytrain_footer_instagram = get_theme_value("Moneytrain_footer_instagram"); ?>
                                 <a href="<?php if(!empty($Moneytrain_footer_instagram)){echo $Moneytrain_footer_instagram; }?>" class="instagram-ico" target="_blank"></a>
                                 <?php $Moneytrain_footer_youtube = get_theme_value("Moneytrain_footer_youtube"); ?>
                                 <a href="<?php if(!empty($Moneytrain_footer_youtube)){echo $Moneytrain_footer_youtube; }?>" class="youtube-ico" target="_blank"></a>
                                  <?php $Moneytrain_footer_feed = get_theme_value("Moneytrain_footer_feed"); ?>
                                 <a href="<?php if(!empty($Moneytrain_footer_feed)){echo $Moneytrain_footer_feed; }?>" class="feed-ico" target="_blank"></a>
                              </div>
                              <div class="footer-contact clearfix">
                                 <p>
                                       <?php $Moneytrain_footer_gmail = get_theme_value("Moneytrain_footer_gmail"); ?>
                                    <a href="mailto:<?php echo $Moneytrain_footer_gmail ?>">
                                       <?php if(!empty($Moneytrain_footer_gmail)) {echo $Moneytrain_footer_gmail; } ?>
                                    </a><br>
                                    <?php $Moneytrain_footer_phone = get_theme_value("Moneytrain_footer_phone"); ?>
                                    <a href="tel:<?php echo $Moneytrain_footer_phone ?>"><?php if(!empty($Moneytrain_footer_phone)) {echo $Moneytrain_footer_phone; } ?></a><br>
                                     <?php $Moneytrain_footer_website = get_theme_value("Moneytrain_footer_website"); ?>
                                    <a href="http://www.moneytraintv.com"><?php if(!empty($Moneytrain_footer_website)) {echo $Moneytrain_footer_website; } ?></a>
                                 </p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4 clearfix">
                     <div class="footer-column-inner clearfix">
                        <div class="widget clearfix">
                           <h3>Recent <span>Post</span></h3>
                           <div class="recent-post-wrap full">
                              <?php
                        $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                        $recentimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'recent_image_size');

                        ?>
                              <div class="recent-post full">
                                 <div class="recent-post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo $recentimage[0]; ?>" width="94" height="94" alt=""></a></div>
                                 <div class="recent-post-desc">
                                    <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                                    <span class="date"><?php echo get_the_date('F j, Y'); ?></span>
                                 </div>
                              </div>
                  <?php 
                  endforeach; 
                  wp_reset_postdata();
                  ?>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 clearfix">
                     <div class="footer-column-inner clearfix">
                        <div class="widget clearfix">
                           <h3>IMPORTANT  <span>LINKS</span></h3>
                           <div class="footer-menu footer-menu-1">
                              <ul>
                                 <?php wp_nav_menu(array('menu' => 'footer_menu1')) ?>  
                              </ul>
                           </div>
                           <div class="footer-menu footer-menu-2">
                              <ul id="menu-footer-menu-2" class="">
                                 <?php wp_nav_menu(array('menu' => 'footer_menu2')) ?> 
                              </ul>
                           </div>
                        </div>
                        <div class="widget clearfix">
                           <div class="mailing-list clearfix">
                              <h3>MAILING <span>LIST</span></h3>
                              <div class="full mailing-list-wrap">
                                 <div class="textwidget">
                                     <?php echo do_shortcode('[mc4wp_form id="267"]')?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom full">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 clearfix">
                     <div class="copyright">
                        <?php $Moneytrain_copyright = get_theme_value("Moneytrain_copyright"); ?>
                        <div class="textwidget"><?php if(!empty($Moneytrain_copyright)) {echo $Moneytrain_copyright;} ?></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
	  
      <?php wp_footer(); ?>
	  <script>
		jQuery(document).ready(function () {      
			jQuery(".slider-text a.learn-more").on('click',function(event) {
				 var urlHash = jQuery(this).attr('href');
				if(urlHash){
					jQuery('body, html').animate({ scrollTop: jQuery(urlHash).offset().top }, 1500);
				}
			});
		});
	  </script>
   </body>
</html>