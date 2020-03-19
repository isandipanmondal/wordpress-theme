<?php get_header(); ?>
<section class="full">
<div class="container">
<div class="row">
<div class="main-services-wrap full">
<?php if(have_posts()): while(have_posts()): the_post(); ?>  
<div class="col-md-3 clearfix">
<a href="<?php the_permalink(); ?>">
<h2><?php the_title(); ?></h2>
</a>
<?php the_excerpt(); ?>
</div>
<?php endwhile; else: ?>
</div>
</div>
</section>
<section class="full">
<div class="container">
<div class="row">
<div class="main-services-wrap full">
<div class="col-md-12 clearfix">
<h2 style="text-align: center;"><?php _e('Sorry,no posts matched your criteria.'); ?></h2>
<?php endif; ?>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>



