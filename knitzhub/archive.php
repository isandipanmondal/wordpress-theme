<?php get_header(); ?>

  <section class="full recent-posts-wrap">
  <div class="container">

      <div class="custom-category-page"><?php the_category(); ?></div>

      <div class="full recent-posts">
         <div class="row">
            
               <?php if (have_posts()) : while (have_posts()) : the_post(); global $post;?> 
               <?php $postimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
               ?>
            <article class="col-md-3 clearfix">
               <div class="full img-thumb">
                  <!-- <a href="#" class="rpost-share"></a> -->
                  <!--<div class="rpost-share"><?php //echo do_shortcode('[addtoany buttons="dd"]'); ?></div>-->
                  <div class="img-thumb-wrap">
                     <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $postimage[0]; ?>" class="img-responsive" alt=""></a>
                  </div>
               </div>
               <div class="full recent-posts-fulldesc clearfix">
                  <h3 class="full"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                  <div class="post-date full"><span><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </span></div>
                  <?php 
                     $content = get_the_content();
                     $trimmed_content = wp_trim_words( $content, 10, NULL );
                     ?>
                  <p class="full text-justify"><?php echo $trimmed_content; ?> </p>
                  <a class="pull-right read-more-lnk" href="<?php echo get_permalink(); ?>">Read More</a>
               </div>
            </article>
            <?php endwhile; endif; ?>
         </div>
      </div>
   </div>
  </section> 
<?php get_footer(); ?>