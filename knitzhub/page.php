<?php get_header(); ?>

<section class="full welcome_money_train">
  <div class="container">
    <div class="row"> 
      <div class="col-sm-12">
        <div class="inner-pages">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
          <h3><?php the_title(); ?></h3> 
          <?php the_content(); ?>
          <?php endwhile; else: ?>
          <h1><?php _e('Not Found')?></h1>
          <p><?php _e('Sorry,no posts matched your criteria.'); ?></p>
          <?php endif; ?>
        </div>    
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
