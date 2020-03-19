<?php get_header(); ?>

<section class="full welcome_money_train">
         <div class="container">
            
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             	<?php if ( has_post_thumbnail() ) { ?>
              <div class="row">
               <div class="col-lg-9 col-xs-12">
			   <div class="col-lg-12 col-x-12 clearfix margin-md-top-30 text-right single-image">
                   <?php $postimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');?>
                  <img src="<?php echo $postimage[0];?>" class="img-responsive" alt="Who We Are">
               </div>
			   <div class="col-lg-12 col-x-12 who-we-are clearfix">
                  <h2><?php the_title(); ?></h2>
                  <p class="first">industry's standard dummy text</p>
                  <?php the_content(); ?>
               </div>
               
			   </div>
			    <div class="col-lg-3 col-xs-12">
					<div class="custom-sidebar widget clearfix">
                           <h3>Recent <span>Post</span></h3>
                           <div class="recent-post-wrap full">
                              <?php
                        $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 4 );
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
					<?php dynamic_sidebar('sidebar-2');?>
				</div>
             </div>
             <div class="row">
               <div class="col-lg-12 clearfix margin-md-top-30 text-center">
                <?php $embedcode = get_post_meta( get_the_id(), 'contact_page_getin_touch_content', true );  
                if(!empty($embedcode)){
                  echo $embedcode;
                }
                ?>
               </div>
             </div>
               <?php } else {?> 
               <div class="row">
               <div class="col-lg-12 who-we-are clearfix">
                  <h2><?php the_title(); ?></h2>
                   <?php the_content(); ?>
               </div>
             </div>
               <?php }?>
           <?php endwhile; ?>
		 <?php endif; ?>
		 <div class="row">
               <div class="col-lg-12 who-we-are clearfix">
                 <?php echo do_shortcode('[comment-form] '); ?>
               </div>
             </div>

            </div>
         
      </section>
      
      	

   

<?php get_footer(); ?>